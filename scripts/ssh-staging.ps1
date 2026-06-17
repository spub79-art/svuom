# SSH na staging server s deploy klicem
param(
    [Parameter(ValueFromRemainingArguments = $true)]
    [string[]]$RemoteCommand
)

$Key = (Resolve-Path (Join-Path $PSScriptRoot "..\.deploy\svuom_staging")).Path

if ($RemoteCommand.Count -gt 0) {
    $cmd = $RemoteCommand -join " "
    ssh -i $Key -o BatchMode=yes root@glpi.svuom.cz $cmd
} else {
    ssh -i $Key root@glpi.svuom.cz
}
