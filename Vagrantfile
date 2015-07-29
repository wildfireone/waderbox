
Vagrant.configure(2) do |config|

  config.vm.box = "Wildfireone/waderweb"

  config.vm.network "forwarded_port", guest: 80, host: 8000
  config.vm.network "forwarded_port", guest: 22, host: 2200

  # config.vm.network "private_network", ip: "192.168.33.10"

  config.vm.hostname = "waderbox"
  config.ssh.username = "vagrant"
  config.ssh.password = "vagrant"

  # Provider-specific configuration so you can fine-tune various
  # backing providers for Vagrant. These expose provider-specific options.
  # Example for VirtualBox:
  #
  # config.vm.provider "virtualbox" do |vb|
  #   # Display the VirtualBox GUI when booting the machine
  #   vb.gui = true
  #
  #   # Customize the amount of memory on the VM:
  #   vb.memory = "1024"
  # end

end
