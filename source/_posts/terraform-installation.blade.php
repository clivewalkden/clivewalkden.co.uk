---
extends: _layouts.post
id: 20220331
meta_title: Terraform installation on Ubuntu 18.04
meta_description: How to install Terraform (a HashiCorp tool) onto your Ubuntu system. 
title: Terraform Installation
short_intro: A quick installation guide for Terraform on Ubuntu 18.04
intro: A quick installation guide for Terraform on Ubuntu 18.04
published: 2022-03-31 12:00:00
hide: false
category: linux
hero:
author: Clive Walkden
---

@section ('content')
    <h2>What is Terraform?</h2>
    <p>Terraform is an open-source DevOps tool that provides infrastructure as code capabilities. It allows you to create declarative configuration files that can use various cloud APIs to create, update and delete your infrastructure.</p>
    <p>Now you've had a high-level overview of what it does lets get and install it on Ubuntu 18.04.</p>
    <h2>Installation</h2>
    <p>HashiCorp provides its own repositories for installation on the main flavours of Linux.</p>
    <pre><code class="language-shell">curl -fsSL https://apt.releases.hashicorp.com/gpg | sudo apt-key add -
sudo apt-add-repository "deb [arch=amd64] https://apt.releases.hashicorp.com $(lsb_release -cs) main"
sudo apt-get update && sudo apt-get install terraform
</code></pre>
    <p>Running the above commands will add the GPG key to your key store, add the repository to your list that apt gathers software from, and install the latest version (1.1.7 at time of writing).</p>
    <p>When completed you can run <code>terraform --version</code> to see the version you have installed.</p>
    {!! $page->image("/assets/images/blog/articles/terraform-version.png", null, null, ['alt' => 'Terraform version on Ubuntu 18.04', 'class' => '']) !!}
    <p>Now that you have the application installed locally give it a go following the tutorials provided by the <a href="https://learn.hashicorp.com/terraform" rel="external" target="_blank">HashiCorp Learn</a> website.</p>
@endsection