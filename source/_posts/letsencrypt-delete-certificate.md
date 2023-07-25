---
extends: _layouts.post
id: 20220114
meta_title: Letsencrypt Certbot correctly delete certificate
meta_description: How to correctly delete a LetsEncrypt Certbot generated certificate from the Linux command line. 
title: Letsencrypt Certbot correctly delete certificate
short_intro: A quick example of how to delete a LetsEncrypt Certbot generated certificate.
intro: How to correctly delete a LetsEncrypt Certbot generated certificate from the Linux command line.
published: 2022-01-15 10:30:00
hide: false
category: devops
hero:
author: Clive Walkden
section: content
---

LetsEncrypt certbot utility is a handy tool for generating SSL certificates on development, staging and production environments.

You could wait for the certificate to expire and then manually remove all files associated with it in the various directories, but the Certbot tool has it's own command available to cleanup everything associated with a certificate.

### Delete LetsEncrypt Certbot Certificate

```shell
$ sudo certbot delete
```
You will be shown an index list of certificate names and be asked to choose the one you want to delete. Pressing enter confirms the selection and the certificate will be removed from the system as well as any configuration files stored in relation to it.

### Delete LetsEncrypt Certbot Specific Domain

If you already know the certificate name you want to delete you can pass an argument to target the specific certificate.

```shell
$ sudo certbot delete --cert-name example.com
```

This removes the targeted certificate without the index list appearing. This can be useful if the certificate doesn't appear in the index list or if you want to run a scripted un-installation for your DevOps be it in Ansible, or your tool of choice.
