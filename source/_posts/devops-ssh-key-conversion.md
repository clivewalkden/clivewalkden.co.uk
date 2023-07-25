---
extends: _layouts.post
id: 20230502
meta_title: Mastering SSH Key Conversions for DevOps - A Comprehensive Guide
meta_description: Discover the easy steps to convert SSH keys between formats on Linux. Learn how to convert OpenSSH keys to PPK and PEM formats, and vice versa using the 'puttygen' and 'ssh-keygen' command-line tools. Enhance your SSH key compatibility and streamline authentication across various platforms and clients effortlessly.
title: Mastering SSH Key Conversions for DevOps
short_intro: A guide to convert SSH keys from one version to another using Linux CLI
intro: Discover the easy steps to convert SSH keys between formats on Linux. Learn how to convert OpenSSH keys to PPK and PEM formats, and vice versa using the 'puttygen' and 'ssh-keygen' command-line tools. Enhance your SSH key compatibility and streamline authentication across various platforms and clients effortlessly.
published: 2023-05-02 19:48:14
hide: false
category: devops
hero:
author: Clive Walkden
section: content
---

Converting SSH keys between formats on Linux is a simple process, and this guide will walk you through the steps to convert between different formats using the command line. Whether you need to convert OpenSSH keys to PuTTY format or vice versa, we've got you covered!

## Install PuTTY

If you don't already have [PuTTY](https://www.putty.org/) installed on your Linux system, you'll need to install it first. You can typically install PuTTY from the package manager of your Linux distribution. For example, on Ubuntu or Debian-based systems, you can use the following command:
```shell
sudo apt update
sudo apt install putty-tools
```

This guide will walk you through the process of converting between the following formats:


## OpenSSH to PPK

Once PuTTY is installed, you can use the "puttygen" command to convert an OpenSSH private key to PPK format. The syntax for the conversion is as follows:
```shell
puttygen /path/to/openssh_private_key -o /path/to/output_ppk_private_key.ppk
```

Replace "/path/to/openssh_private_key" with the path to your existing OpenSSH private key, and "/path/to/output_ppk_private_key.ppk" with the desired path and filename for the converted PPK private key.

For example, if your OpenSSH private key is named "id_rsa" and is located in the default SSH directory (~/.ssh/), and you want to create a PPK private key named "id_rsa.ppk" in the same directory, you can use the following command:
```shell
puttygen ~/.ssh/id_rsa -o ~/.ssh/id_rsa.ppk
```


## OpenSSH to PEM

To convert the OpenSSH private key to PEM format, use the following command:
```shell
ssh-keygen -p -m PEM -f /path/to/openssh_private_key
```

Replace "/path/to/openssh_private_key" with the path to your existing OpenSSH private key.

For example, if your OpenSSH private key is located at "~/.ssh/id_rsa", you would use:
```shell
ssh-keygen -p -m PEM -f ~/.ssh/id_rsa
```


## PPK to OpenSSH

Using the "puttygen" command again, you can convert a PPK private key to OpenSSH format with the following syntax:
```shell
puttygen /path/to/ppk_private_key.ppk -O private-openssh -o /path/to/output_openssh_private_key
```

Replace "/path/to/ppk_private_key.ppk" with the path to your existing PPK private key, and "/path/to/output_openssh_private_key" with the desired path and filename for the converted OpenSSH private key.


## PPK to PEM

For converting a PPK private key to PEM format, you can use the "puttygen" command once more:
```shell
puttygen /path/to/ppk_private_key.ppk -O private-openssh -o /path/to/output_pem_private_key.pem
```

Replace "/path/to/ppk_private_key.ppk" with the path to your existing PPK private key and "/path/to/output_pem_private_key.pem" with the desired path and filename for the converted PEM private key.


## PEM to OpenSSH

To convert the PEM private key to OpenSSH format, use the following command:
```shell
ssh-keygen -p -m PEM -f /path/to/pem_private_key
```

Replace "/path/to/pem_private_key" with the path to your existing PEM private key.

For example, if your PEM private key is located at "~/my_private_key.pem", you would use:
```shell
ssh-keygen -p -m PEM -f ~/my_private_key.pem
```


## Wrap up

With these simple steps, you can effortlessly convert SSH keys between different formats on your Linux system. Whether you need to switch between OpenSSH and PuTTY formats or convert PEM keys for specific applications, the command-line tools provided make the process a breeze. Now you have the flexibility to use your SSH keys across various platforms and clients, ensuring a smooth and secure authentication experience.