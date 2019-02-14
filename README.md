This is a Sample PLugin to demonstrate the possibilities of Plugins tu use the new (ILIAS 5.4) GlobalScreen-Service to provide Items and Types for the Main-menu.

## Installation

### Install GlobalScreenDemo-Plugin
Start at your ILIAS root directory
```bash
mkdir -p Customizing/global/plugins/Services/EventHandling/EventHook
cd Customizing/global/plugins/Services/EventHandling/EventHook
git clone https://github.com/studer-raimann/GlobalScreenDemo.git GlobalScreenDemo
```
Update, activate and config the plugin in the ILIAS Plugin Administration

### Dependencies
* ILIAS 5.4
* PHP >=7.0
* [composer](https://getcomposer.org)
* [srag/dic](https://packagist.org/packages/srag/dic)

Please use it for further development!

### Adjustment suggestions
* Adjustment suggestions by pull requests on https://github.com/studer-raimann/GlobalScreenDemo/tree/develop
* Adjustment suggestions which are not yet worked out in detail by Jira tasks under https://jira.studer-raimann.ch/projects/PLGlobalScreenDemo
* For external users please send an email to support-core1@studer-raimann.ch

### Development
If you want development in this plugin you should install this plugin like follow:

Start at your ILIAS root directory
```
mkdir -p Customizing/global/plugins/Services/EventHandling/EventHook
cd Customizing/global/plugins/Services/EventHandling/EventHook
git clone -b develop https://github.com/studer-raimann/GlobalScreenDemo.git GlobalScreenDemo
```

### ILIAS Plugin SLA
Wir lieben und leben die Philosophie von Open Source Software! Die meisten unserer Entwicklungen, welche wir im Kundenauftrag oder in Eigenleistung entwickeln, stellen wir öffentlich allen Interessierten kostenlos unter https://github.com/studer-raimann zur Verfügung.

Setzen Sie eines unserer Plugins professionell ein? Sichern Sie sich mittels SLA die termingerechte Verfügbarkeit dieses Plugins auch für die kommenden ILIAS Versionen. Informieren Sie sich hierzu unter https://studer-raimann.ch/produkte/ilias-plugins/plugin-sla.

Bitte beachten Sie, dass wir nur Institutionen, welche ein SLA abschliessen Unterstützung und Release-Pflege garantieren.
