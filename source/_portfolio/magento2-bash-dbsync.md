---
extends: _layouts.plugins
id: 5
title: Magento 2 DB Sync Bash Script
status: Live
url: https://github.com/clivewalkden/bash-magento2-db-sync
issues: https://github.com/clivewalkden/bash-magento2-db-sync/issues
docs: https://github.com/clivewalkden/bash-magento2-db-sync/blob/master/README.md
badge_style: flat-square
github_user: clivewalkden
github_repo: bash-magento2-db-sync
launched: 2020-07-09
lastupdate: 2022-01-06
finished: false
featured: false
image_main: github-repo.png
image_small: github-repo-small.png
supported_versions: [Magento 2.0,Magento 2.1,Magento 2.2,Magento 2.3,Magento 2.4]
section: summary
intro: A bash script to syncronise databases from production to staging or development.
meta_title: Magento 2 DB Sync Bash Script
meta_description: A bash script to syncronise databases from production to staging or development.
---

This script was written to allow a quick an easy method of copying a production database to staging or development environments. It has the ability to remove sensitive data such as customer and order data as well as custom table exclusions via a conf file.

This system is used at SOZO to keep all staging and development environments database content current while excluding our clients customer data for data protection reasons.
