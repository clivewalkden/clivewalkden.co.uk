---
extends: _layouts.plugins
id: 20220122
title: Magento 2 WYSIWYG Error Remover Module
status: Live
url: https://github.com/sozo-design/magento2-module-sozo-wysiwygerrorremover
issues: https://github.com/sozo-design/magento2-module-sozo-wysiwygerrorremover/issues
docs: https://github.com/sozo-design/magento2-module-sozo-wysiwygerrorremover/blob/master/README.md
badge_style: flat-square
github_user: sozo-design
github_repo: magento2-module-sozo-wysiwygerrorremover
packagist_user: sozodesign
packagist_repo: magento2-module-sozo-wysiwygerrorremover
launched: 2022-01-15
lastupdate:
finished: false
featured: false
image_main: github-repo.png
image_small: github-repo-small.png
supported_versions: [Magento 2.4]
section: summary
intro: Removes the error message displayed when saving a CMS page in Magento 2.4.2 or higher.
meta_title: Magento 2 WYSIWYG Error Remover Module
meta_description: Removes the error message displayed when saving a CMS page in Magento 2.4.2 or higher.
---

After testing our latest Magento 2.4.3 upgrades we noticed that when saving a CMS page in the admin you got an error returned.

"Temporarily allowed to save HTML value that contains restricted elements. Allowed HTML tags are..."

The message, although an error, doesn't stop the saving of the data or impact the site in any way. This appears to be ready for the next upgrade to the CMS text fields.

Searching online return this [Magento Stack Exchange Article](https://magento.stackexchange.com/questions/331918/cms-and-block-content-warning-magento-2-4-2) and a [great explanation from rou6e](https://magento.stackexchange.com/a/332878/90020)

[Dipak Prajapati](https://magento.stackexchange.com/a/350710/90020) posts a fix to stop the error which this module is based on and is now used for our 2.4 builds.
