---
extends: _layouts.plugins
id: 20220227
title: Magento 2 Outdated Browser Warning Module
status: Live
type: module
url: https://github.com/sozo-design/magento2-module-sozo-outdatedbrowserwarning
issues: https://github.com/sozo-design/magento2-module-sozo-outdatedbrowserwarning/issues
docs: https://github.com/sozo-design/magento2-module-sozo-outdatedbrowserwarning/blob/2.4/README.md
badge_style: flat-square
github_user: sozo-design
github_repo: magento2-module-sozo-outdatedbrowserwarning
packagist_user: sozodesign
packagist_repo: magento2-module-sozo-outdatedbrowserwarning
launched: 2022-02-27
lastupdate:
finished: false
featured: false
image_main: github-repo.png
image_small: github-repo-small.png
supported_versions: [Magento 2.4]
section: summary
intro: A simple module that outputs a warning if an unsupported browser is being used to view the website.
meta_title: Magento 2 Outdated Browser Warning Module
meta_description: A simple module that outputs a warning if an unsupported browser is being used to view the website.
---

This module simply detects if the browser is running Microsoft Internet Explorer versions below 10 and if it is outputs a message letting the user know the browser isn't supported.

The detection is via useragent sniffing so is subject to easy bypassing. This module is mainly for SOZO projects as a couple of clients want the message output for their customers of the Magento 2 website.
