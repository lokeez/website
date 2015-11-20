---
title: 'Файлы `:Zone.Identifier` на NFS'
summary:
    enabled: '1'
    format: short
taxonomy:
    tag:
        - софт
        - howto
    category:
        - blog
---

> Creation of ZoneIdentifier streams can be disabled by setting the policy `Do not preserve zone information in file attachments` to `enabled`. The policy is located under `User Configuration\Administrative Templates\Windows Components\Attachment Manager`.
> For crippled Windows versions creating a `DWORD` registry value `SaveZoneInformation` with value `1` in `[HKCU\Software\Microsoft\Windows\CurrentVersion\Policies\Attachments]` should have the same effect.

`Редактор локальной групповой политики (gpedit.msc)\Конфигурация пользователя\Административные шаблоны\Компоненты Windows\Диспетчер вложений\`
Включить `Удаление сведений о зоне происхождения вложений` - Windows 7, `Не сохранять сведения о зоне во вложенных файлах` - Windows XP.

* [:Zone.Identifier files keep on appearing in Windows XP virtual machine](http://superuser.com/questions/481883/zone-identifier-files-keep-on-appearing-in-windows-xp-virtual-machine)
* [Система безопасности Windows: отключить предупреждение.](http://detano.ru/post.php?id=145)