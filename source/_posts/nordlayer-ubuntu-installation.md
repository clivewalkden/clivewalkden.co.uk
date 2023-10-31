---
extends: _layouts.post
id: 20231030
meta_title: How to Install NordLayer VPN Client on Ubuntu 20.04 and Connect to a Virtual Network
meta_description: Find out how to install the NordLayer VPN service on your Ubuntu 20.04 machine with this simple to follow guide.
title: How to Install NordLayer VPN Client on Ubuntu 20.04 and Connect to a Virtual Network
short_intro: A simple to follow installation guide for NordLayer VPN
intro: Find out how to install the NordLayer VPN service on your Ubuntu 20.04 machine with this simple to follow guide.
published: 2023-10-30 07:12:48
hide: false
category: linux
hero:
author: Clive Walkden
section: content
---

Virtual Private Networks (VPNs) are essential tools for ensuring online privacy and security. NordLayer, the VPN service from NordVPN, provides an efficient and reliable solution for Ubuntu 20.04 users. In this guide, we will walk you through the step-by-step process of installing the NordLayer VPN client on Ubuntu 20.04 and connecting to a virtual network.

### Step 1: Obtain NordLayer Credentials
Before you begin, you need a NordLayer account with valid credentials. If you don't have one yet, visit the NordLayer website and sign up for an account. Once you have your credentials, you're ready to proceed.

### Step 2: Install NordLayer VPN Client
To install the NordLayer VPN client on Ubuntu 20.04, follow these steps:

Open the Terminal:
Press Ctrl + Alt + T to open a terminal window.

Add the NordLayer Repository:
Execute the following command to add the NordLayer repository to your system:
```shell
echo "deb [arch=amd64 signed-by=/usr/share/keyrings/nordlayer-archive-keyring.gpg] https://downloads.nordlayer.com/linux/latest/debian ./stable main" | sudo tee /etc/apt/sources.list.d/nordlayer.list
```

Import the NordLayer GPG Key:
Import the NordLayer GPG key to ensure package integrity:
```shell
wget -qO - https://repo.nordlayer.com/deb/nordlayer-archive-keyring.gpg | sudo gpg --dearmor -o /usr/share/keyrings/nordlayer-archive-keyring.gpg
```

### Step 3: Update APT
After adding the repository and GPG key, update APT to fetch the latest package information:
```shell
sudo apt update
```

### Step 4: Install NordLayer Client
With the repository added and APT updated, you can now install the NordLayer client using the following command:
```shell
sudo apt install nordlayer
```

This will download and install the NordLayer client on your Ubuntu machine.

### Step 5: Authenticate and Connect
Once the installation is complete, run the NordLayer client from the terminal or application menu. You will be prompted to log in using your NordLayer account credentials. After authenticating, you can connect to the NordLayer VPN network with the command `nordlayer connect` followed by your gateway or country code, to disconnect type `nordlayer disconnect`.
