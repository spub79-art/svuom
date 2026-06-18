<?php

class SvuomInformaceRepository
{
    public static function langCode($lang)
    {
        return $lang === 'en' ? 1 : 0;
    }

    public static function recent($lang, $limit = 5)
    {
        $pdo = svuom_mysql_pdo();
        if (!$pdo) {
            return array();
        }

        $langCode = self::langCode($lang);
        $limit = (int) $limit;
        $sql = 'SELECT iid, title, topic, issue_date, pdf, pic, lang FROM informace WHERE lang = :lang ORDER BY iid DESC LIMIT ' . $limit;
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(':lang' => $langCode));

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id, $lang)
    {
        $pdo = svuom_mysql_pdo();
        if (!$pdo) {
            return null;
        }

        $stmt = $pdo->prepare('SELECT iid, title, topic, issue_date, pdf, pic, lang FROM informace WHERE iid = :id AND lang = :lang LIMIT 1');
        $stmt->execute(array(
            ':id' => (int) $id,
            ':lang' => self::langCode($lang),
        ));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row ? $row : null;
    }

    public static function listAll($lang, $limit = 50, $offset = 0)
    {
        $pdo = svuom_mysql_pdo();
        if (!$pdo) {
            return array();
        }

        $langCode = self::langCode($lang);
        $limit = (int) $limit;
        $offset = (int) $offset;
        $sql = 'SELECT iid, title, topic, issue_date, pdf, pic, lang FROM informace WHERE lang = :lang ORDER BY iid DESC LIMIT ' . $limit . ' OFFSET ' . $offset;
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(':lang' => $langCode));

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function formatDate($issueDate)
    {
        if (!$issueDate) {
            return '';
        }

        $parts = explode(' ', $issueDate);
        $date = isset($parts[0]) ? $parts[0] : $issueDate;
        $dbdatum = explode('-', $date);
        if (count($dbdatum) === 3) {
            return $dbdatum[2] . '.' . $dbdatum[1] . '.' . $dbdatum[0];
        }

        return $date;
    }

    public static function excerpt($topic, $length = 180)
    {
        $text = trim(strip_tags($topic));
        if (function_exists('mb_strlen') && function_exists('mb_substr')) {
            if (mb_strlen($text) <= $length) {
                return $text;
            }

            return rtrim(mb_substr($text, 0, $length)) . '…';
        }

        if (strlen($text) <= $length) {
            return $text;
        }

        return rtrim(substr($text, 0, $length)) . '...';
    }

    public static function slugFromTitle($title)
    {
        $slug = strtolower($title);
        $slug = preg_replace('/[^a-z0-9]+/i', '-', $slug);
        $slug = trim($slug, '-');

        return $slug !== '' ? $slug : 'aktualita';
    }
}

?>
