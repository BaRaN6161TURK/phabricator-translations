<?php

final class PhabricatorAlmanacEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Service PHID.' => 'Service PHID.',
      'Specify a public key to trust with --id.' => 'Specify a public key to trust with --id.',
      'Transaction value when setting Almanac properties must be a map with property names as keys.' => 'Transaction value when setting Almanac properties must be a map with property names as keys.',
      'Name of the service.' => 'Name of the service.',
      'Service "%s" is unrecognized, restricted, or you do not have permission to edit it.' => 'Service "%s" is unrecognized, restricted, or you do not have permission to edit it.',
      'Installing device %s...' => 'Installing device %s...',
      'Namespace' => 'Namespace',
      'Add Property' => 'Add Property',
      'Map of property names to values.' => 'Map of property names to values.',
      'Builtin Property' => 'Builtin Property',
      'Enable this binding?' => 'Enable this binding?',
      'ID of the key to revoke trust for.' => 'ID of the key to revoke trust for.',
      'Name of the network.' => 'Name of the network.',
      'This is a cluster service.' => 'This is a cluster service.',
      'Manage public and private networks.' => 'Manage public and private networks.',
      'Apply transactions to create a new binding or edit an existing one.' => 'Apply transactions to create a new binding or edit an existing one.',
      'You can not bind a service which you do not have permission to edit.' => 'You can not bind a service which you do not have permission to edit.',
      'Network for the interface.' => 'Network for the interface.',
      'To view a binding, you must also be able to view its device and interface.' => 'To view a binding, you must also be able to view its device and interface.',
      'This device is bound to a cluster service.' => 'This device is bound to a cluster service.',
      'Device %d' => 'Device %s',
      'The bound service.' => 'The bound service.',
      'Add Interface' => 'Add Interface',
      'Almanac service, device, property, network and namespace names may not be more than 100 characters long.' => 'Almanac service, device, property, network and namespace names may not be more than 100 characters long.',
      'Almanac Namespace' => 'Almanac Namespace',
      'Reset property "%s" to its default value?' => 'Reset property "%s" to its default value?',
      'Bindings must specify an interface.' => 'Bindings must specify an interface.',
      'Cluster Device' => 'Cluster Device',
      'Disable this binding?' => 'Disable this binding?',
      'Almanac service, device, property, network and namespace names may not contain multiple consecutive periods.' => 'Almanac service, device, property, network and namespace names may not contain multiple consecutive periods.',
      'This device has no associated SSH public keys.' => 'This device has no associated SSH public keys.',
      'Create Service' => 'Create Service',
      'You can only trust keys associated with Almanac devices.' => 'You can only trust keys associated with Almanac devices.',
      'You do not have permission to create Almanac services.' => 'You do not have permission to create Almanac services.',
      'Almanac service, device, property, network and namespace names may not contain hyphens adjacent to periods.' => 'Almanac service, device, property, network and namespace names may not contain hyphens adjacent to periods.',
      'Public key with ID %s is already trusted.' => 'Public key with ID %s is already trusted.',
      'You can not bind a nonexistent or restricted service.' => 'You can not bind a nonexistent or restricted service.',
      '%s enabled this binding.' => '%s enabled this binding.',
      'Register this host even if keys already exist on disk.' => 'Register this host even if keys already exist on disk.',
      'Interface PHID.' => 'Interface PHID.',
      'Path to a private key for the host.' => 'Path to a private key for the host.',
      'Drydock: Resource Pool' => 'Drydock: Resource Pool',
      'Search for bindings on particular services.' => 'Search for bindings on particular services.',
      'Add Binding' => 'Add Binding',
      'Mark a public key as trusted.' => 'Mark a public key as trusted.',
      'When creating a new Almanac interface via the Conduit API, you must provide a "device" transaction to select a device.' => 'When creating a new Almanac interface via the Conduit API, you must provide a "device" transaction to select a device.',
      'Almanac Devices' => 'Almanac Devices',
      'Custom Service' => 'Custom Service',
      'Phabricator Cluster: Database' => 'Phabricator Cluster: Database',
      'Almanac Networks' => 'Almanac Networks',
      'You must be able to view the network an interface resides on to view the interface.' => 'You must be able to view the network an interface resides on to view the interface.',
      'Almanac service, device, property, network and namespace names must be at least 3 characters long.' => 'Almanac service, device, property, network and namespace names must be at least 3 characters long.',
      'Edit Namespace' => 'Edit Namespace',
      'Network %d' => 'Network %s',
      'Properties inherit the policies of their object.' => 'Properties inherit the policies of their object.',
      'Config option "phd.user" is not set. You must set this option so the private key can be stored with the correct permissions.' => 'Config option "phd.user" is not set. You must set this option so the private key can be stored with the correct permissions.',
      'Select the service to bind.' => 'Select the service to bind.',
      'The address of the interface.' => 'The address of the interface.',
      'This service has not been bound to any device interfaces yet.' => 'This service has not been bound to any device interfaces yet.',
      'Prevent Writes' => 'Prevent Writes',
      'The device for an interface can not be changed once it has been created.' => 'The device for an interface can not be changed once it has been created.',
      'Search for interfaces on particular devices.' => 'Search for interfaces on particular devices.',
      'Namespace Name' => 'Namespace Name',
      'Really trust this key?' => 'Really trust this key?',
      'Browse documentation for Almanac.' => 'Browse documentation for Almanac.',
      'The service for this binding is a cluster service. You do not have permission to manage cluster services, so this binding can not be edited.' => 'The service for this binding is a cluster service. You do not have permission to manage cluster services, so this binding can not be edited.',
      'Browse Services' => 'Browse Services',
      'You can not bind a service to an invalid or restricted interface.' => 'You can not bind a service to an invalid or restricted interface.',
      'Interfaces must have a device.' => 'Interfaces must have a device.',
      'Read information about Almanac networks.' => 'Read information about Almanac networks.',
      'Specify a private key with --private-key.' => 'Specify a private key with --private-key.',
      'Remove interface %s on device %s?' => 'Remove interface %s on device %s?',
      '%s updated the property %s.' => '%s updated the property %s.',
      'Edit Almanac Binding Configurations' => 'Edit Almanac Binding Configurations',
      'Address of the service.' => 'Address of the service.',
      'When creating a new Almanac service via the Conduit API, you must provide a "type" transaction to select a type.' => 'When creating a new Almanac service via the Conduit API, you must provide a "type" transaction to select a type.',
      'Set the interface to bind.' => 'Set the interface to bind.',
      'Phabricator Cluster: Repository' => 'Phabricator Cluster: Repository',
      'Specify an alternate host identity. This is an advanced feature which allows a pool of devices to share credentials.' => 'Specify an alternate host identity. This is an advanced feature which allows a pool of devices to share credentials.',
      'Control who can create new named services and devices.' => 'Control who can create new named services and devices.',
      'Almanac services must have unique names.' => 'Almanac services must have unique names.',
      'Another namespace with this name already exists. Each namespace must have a unique name.' => 'Another namespace with this name already exists. Each namespace must have a unique name.',
      'Interfaces must have a port number.' => 'Interfaces must have a port number.',
      'This permission is very dangerous. %s' => 'This permission is very dangerous. %s',
      'Binding %d' => 'Binding %s',
      'An interface inherits the policies of the device it belongs to.' => 'An interface inherits the policies of the device it belongs to.',
      'This device is bound to a cluster service. You do not have permission to manage cluster services, so the device can not be edited.' => 'This device is bound to a cluster service. You do not have permission to manage cluster services, so the device can not be edited.',
      'Set the service type.' => 'Set the service type.',
      'Create Binding' => 'Create Binding',
      'Reset' => 'Reset',
      'Edit Network' => 'Edit Network',
      'Allow New Repositories' => 'Allow New Repositories',
      'Almanac Service' => 'Almanac Service',
      'This service is a cluster service. You do not have permission to edit cluster services, so you can not edit this service.' => 'This service is a cluster service. You do not have permission to edit cluster services, so you can not edit this service.',
      'Edit Service' => 'Edit Service',
      'Create Namespace' => 'Create Namespace',
      'A binding inherits the policies of its service.' => 'A binding inherits the policies of its service.',
      'No Almanac service type "%s" exists!' => 'No Almanac service type "%s" exists!',
      'Cluster Database' => 'Cluster Database',
      'No Almanac Devices found.' => 'No Almanac Devices found.',
      'Almanac property values must be representable in JSON. %s' => 'Almanac property values must be representable in JSON. %s',
      'Service type "%s" is unrecognized. Valid types are: %s.' => 'Service type "%s" is unrecognized. Valid types are: %s.',
      'Interface %d' => 'Interface %s',
      'Network' => 'Network',
      'Almanac Interfaces' => 'Almanac Interfaces',
      'Create Network' => 'Create Network',
      'Read information about Almanac devices.' => 'Read information about Almanac devices.',
      'The interface the service is bound to.' => 'The interface the service is bound to.',
      'The name of the network.' => 'The name of the network.',
      'Device Interfaces' => 'Device Interfaces',
      'Custom Property' => 'Custom Property',
      'Installing public key...' => 'Installing public key...',
      'Almanac networks must have unique names.' => 'Almanac networks must have unique names.',
      'Search for services with specific names.' => 'Search for services with specific names.',
      'Service Name' => 'Service Name',
      'Almanac Core Objects' => 'Almanac Core Objects',
      'Edit Device' => 'Edit Device',
      'The device the service is bound to.' => 'The device the service is bound to.',
      'Public key with ID %s is not trusted.' => 'Public key with ID %s is not trusted.',
      'All Networks' => 'All Networks',
      'The name of the service.' => 'The name of the service.',
      'Prevent New Repositories' => 'Prevent New Repositories',
      'This engine is used to edit Almanac interfaces.' => 'This engine is used to edit Almanac interfaces.',
      'Public key "%s" is not an active key.' => 'Public key "%s" is not an active key.',
      '%s changed the network for this interface from %s to %s.' => '%s changed the network for this interface from %s to %s.',
      'Edit Network: %s' => 'Edit Network: %s',
      'Delete Property' => 'Delete Property',
      'Edit Property' => 'Edit Property',
      'Register this host as an Almanac device.' => 'Register this host as an Almanac device.',
      'TRUSTED' => 'TRUSTED',
      '%s created this service.' => '%s created this service.',
      'You do not have permission to create Almanac networks.' => 'You do not have permission to create Almanac networks.',
      'Search for devices by name substring.' => 'Search for devices by name substring.',
      'Namespace name is required.' => 'Namespace name is required.',
      'Search for services bound to particular devices.' => 'Search for services bound to particular devices.',
      'No private key exists at path "%s"!' => 'No private key exists at path "%s"!',
      'Disable or enable the binding.' => 'Disable or enable the binding.',
      'Device name is required.' => 'Device name is required.',
      'Interfaces must have an address.' => 'Interfaces must have an address.',
      'True to disable the binding.' => 'True to disable the binding.',
      '%s renamed this service from %s to %s.' => '%s renamed this service from %s to %s.',
      'Drydock Pool' => 'Drydock Pool',
      'You can not attach an interface to a nonexistent or restricted device.' => 'You can not attach an interface to a nonexistent or restricted device.',
      'Almanac service, device, network, property and namespace names may not have any segments containing only digits.' => 'Almanac service, device, network, property and namespace names may not have any segments containing only digits.',
      'Namespace %d' => 'Namespace %s',
      'Edit Almanac Interface Configurations' => 'Edit Almanac Interface Configurations',
      'You can not delete this interface because it is currently in use. One or more services are bound to it.' => 'You can not delete this interface because it is currently in use. One or more services are bound to it.',
      'Edit Service: %s' => 'Edit Service: %s',
      'Almanac Console' => 'Almanac Console',
      'Browse Interfaces' => 'Browse Interfaces',
      'Namespace %s' => 'Namespace %s',
      'Almanac Binding' => 'Almanac Binding',
      'Port numbers must be between 1 and 65535, inclusive.' => 'Port numbers must be between 1 and 65535, inclusive.',
      'List of property names.' => 'List of property names.',
      'Type a service type name...' => 'Type a service type name...',
      'Cluster Devices Only' => 'Cluster Devices Only',
      'The service for a binding can not be changed once it has been created.' => 'The service for a binding can not be changed once it has been created.',
      'Can Create Networks' => 'Can Create Networks',
      'Can Create Services' => 'Can Create Services',
      'The public key corresponding to the given private key is already associated with an object ("%s") other than the specified device ("%s"). You can not use a single private key to identify multiple devices or users.' => 'The public key corresponding to the given private key is already associated with an object ("%s") other than the specified device ("%s"). You can not use a single private key to identify multiple devices or users.',
      'The network the interface is part of.' => 'The network the interface is part of.',
      'When creating a service, set the type.' => 'When creating a service, set the type.',
      'Device PHID.' => 'Device PHID.',
      'Delete property "%s"?' => 'Delete property "%s"?',
      'The service for this binding is a cluster service.' => 'The service for this binding is a cluster service.',
      'Read information about Almanac namespaces.' => 'Read information about Almanac namespaces.',
      'Binding %s' => 'Binding %s',
      'Network name is required.' => 'Network name is required.',
      'Create Property' => 'Create Property',
      'Port of the service.' => 'Port of the service.',
      'You do not have permission to create Almanac devices within the "%s" namespace.' => 'You do not have permission to create Almanac devices within the "%s" namespace.',
      'This host already has a registered private key ("%s"). Remove this key before registering the host, or use --force to overwrite it.' => 'This host already has a registered private key ("%s"). Remove this key before registering the host, or use --force to overwrite it.',
      'This key is associated with device "%s".' => 'This key is associated with device "%s".',
      'Key %s has been marked as trusted.' => 'Key %s has been marked as trusted.',
      'Binding' => 'Binding',
      'This engine is used to edit Almanac networks.' => 'This engine is used to edit Almanac networks.',
      'You can not bind a service to the same interface multiple times.' => 'You can not bind a service to the same interface multiple times.',
      'Trust has been revoked for public key %s.' => 'Trust has been revoked for public key %s.',
      'Apply transactions to create a new network or edit an existing one.' => 'Apply transactions to create a new network or edit an existing one.',
      'Service Directory' => 'Service Directory',
      'To create a new service, you must select a service type.' => 'To create a new service, you must select a service type.',
      'Read information about Almanac interfaces.' => 'Read information about Almanac interfaces.',
      'Apply transactions to create a new namespace or edit an existing one.' => 'Apply transactions to create a new namespace or edit an existing one.',
      'Service Types' => 'Service Types',
      'Service type "%s" is not valid. Valid types are: %s.' => 'Service type "%s" is not valid. Valid types are: %s.',
      'Almanac Bindings' => 'Almanac Bindings',
      'Service Type' => 'Service Type',
      'This host already has a registered public key ("%s"). Remove this key before registering the host, or use --force to overwrite it.' => 'This host already has a registered public key ("%s"). Remove this key before registering the host, or use --force to overwrite it.',
      'Specify a device with --device.' => 'Specify a device with --device.',
      'All Bindings' => 'All Bindings',
      'Edit Namespace: %s' => 'Edit Namespace: %s',
      'Service Bindings' => 'Service Bindings',
      'Invalid Property' => 'Invalid Property',
      'The service type constant.' => 'The service type constant.',
      'The property name "%s" is invalid. This property can not be edited.' => 'The property name "%s" is invalid. This property can not be edited.',
      'Almanac' => 'Almanac',
      'Can Manage Cluster Services' => 'Can Manage Cluster Services',
      'No public key exists with ID "%s".' => 'No public key exists with ID "%s".',
      'The name of the namespace.' => 'The name of the namespace.',
      'Type a service name...' => 'Type a service name...',
      'Almanac Namespaces' => 'Almanac Namespaces',
      'No Almanac Services found.' => 'No Almanac Services found.',
      'IMPORTANT!' => 'IMPORTANT!',
      'Search for bindings on particular devices.' => 'Search for bindings on particular devices.',
      '%s created this device.' => '%s created this device.',
      'Almanac User Guide' => 'Almanac User Guide',
      'You have permission to create cluster services.' => 'You have permission to create cluster services.',
      'You do not have permission to create Almanac services within the "%s" namespace.' => 'You do not have permission to create Almanac services within the "%s" namespace.',
      'Edit Interface' => 'Edit Interface',
      'Specify a public key to revoke trust for with --id.' => 'Specify a public key to revoke trust for with --id.',
      'Interface to bind the service to.' => 'Interface to bind the service to.',
      '%s removed the property %s.' => '%s removed the property %s.',
      'Choose Service Type' => 'Choose Service Type',
      '%s renamed this namespace from %s to %s.' => '%s renamed this namespace from %s to %s.',
      'Apply transactions to create a new interface or edit an existing one.' => 'Apply transactions to create a new interface or edit an existing one.',
      'This engine is used to edit Almanac properties.' => 'This engine is used to edit Almanac properties.',
      'No services are bound to this device.' => 'No services are bound to this device.',
      'Interfaces must have a unique combination of network, device, address, and port.' => 'Interfaces must have a unique combination of network, device, address, and port.',
      'Set the device.' => 'Set the device.',
      'Name of the namespace.' => 'Name of the namespace.',
      'Network %s' => 'Network %s',
      'Bound Services' => 'Bound Services',
      'Disable Binding' => 'Disable Binding',
      'Create Device' => 'Create Device',
      'All Interfaces' => 'All Interfaces',
      'This engine is used to edit Almanac services.' => 'This engine is used to edit Almanac services.',
      'Service %d' => 'Service %s',
      'Edit Almanac Namespace Configurations' => 'Edit Almanac Namespace Configurations',
      'Almanac devices must have unique names.' => 'Almanac devices must have unique names.',
      'Edit Almanac Device Configurations' => 'Edit Almanac Device Configurations',
      'Edit Property: %s' => 'Edit Property: %s',
      'Pass a list of property names to delete properties.' => 'Pass a list of property names to delete properties.',
      'When creating an interface, set the device.' => 'When creating an interface, set the device.',
      'Service to create a binding for.' => 'Service to create a binding for.',
      'Almanac service, device, property, network and namespace names must begin and end with a letter or number.' => 'Almanac service, device, property, network and namespace names must begin and end with a letter or number.',
      'Name of the device.' => 'Name of the device.',
      'Enable Binding' => 'Enable Binding',
      'Can Create Namespaces' => 'Can Create Namespaces',
      'Read information about Almanac services.' => 'Read information about Almanac services.',
      'Trusting a public key gives anyone holding the corresponding private key complete, unrestricted access to all data in Phabricator. The private key will be able to sign requests that skip policy and security checks.' => 'Trusting a public key gives anyone holding the corresponding private key complete, unrestricted access to all data in Phabricator. The private key will be able to sign requests that skip policy and security checks.',
      'The type of a service can not be changed once it has been created.' => 'The type of a service can not be changed once it has been created.',
      'Interface status.' => 'Interface status.',
      'Edit Almanac Property Configurations' => 'Edit Almanac Property Configurations',
      '%s created this network.' => '%s created this network.',
      'Almanac service, device, property, network and namespace names may not contain multiple consecutive hyphens.' => 'Almanac service, device, property, network and namespace names may not contain multiple consecutive hyphens.',
      '%s renamed this network from %s to %s.' => '%s renamed this network from %s to %s.',
      'Defines a database service for use in a Phabricator cluster.' => 'Defines a database service for use in a Phabricator cluster.',
      '%s changed the interface for this binding from %s to %s.' => '%s changed the interface for this binding from %s to %s.',
      'All Namespaces' => 'All Namespaces',
      'The name of the device.' => 'The name of the device.',
      'The public key corresponding to the given private key is properly associated with the device, but is not yet trusted. Trust this key before registering devices with it.' => 'The public key corresponding to the given private key is properly associated with the device, but is not yet trusted. Trust this key before registering devices with it.',
      '%s changed the device for this interface from %s to %s.' => '%s changed the device for this interface from %s to %s.',
      'Namespaces' => 'Namespaces',
      'Create and update services, and map them to interfaces on devices.' => 'Create and update services, and map them to interfaces on devices.',
      'All Services' => 'All Services',
      'Defines a pool of hosts which Drydock can allocate.' => 'Defines a pool of hosts which Drydock can allocate.',
      'Defines a unstructured custom service.' => 'Defines a unstructured custom service.',
      'Reset Property' => 'Reset Property',
      'Apply transactions to create a new device or edit an existing one.' => 'Apply transactions to create a new device or edit an existing one.',
      'You must select a service type when creating a service.' => 'You must select a service type when creating a service.',
      'Delete Interface' => 'Delete Interface',
      'The namespace name "%s" is already in use by another namespace. Each namespace must have a unique name.' => 'The namespace name "%s" is already in use by another namespace. Each namespace must have a unique name.',
      'Almanac Interface' => 'Almanac Interface',
      'Installing private key...' => 'Installing private key...',
      'No Almanac Networks found.' => 'No Almanac Networks found.',
      'Almanac Network' => 'Almanac Network',
      'You do not have permission to manage cluster services.' => 'You do not have permission to manage cluster services.',
      'You can not put an interface on a nonexistent or restricted network.' => 'You can not put an interface on a nonexistent or restricted network.',
      '%s:%s (%s on %s)' => '%s:%s (%s on %s)',
      'Create Interface' => 'Create Interface',
      'Search for networks by name substring.' => 'Search for networks by name substring.',
      'Almanac services must have a name.' => 'Almanac services must have a name.',
      'TRUST REVOKED' => 'TRUST REVOKED',
      'Device Name' => 'Device Name',
      'No properties.' => 'No properties.',
      '%s changed the port for this interface from %s to %s.' => '%s changed the port for this interface from %s to %s.',
      'All Devices' => 'All Devices',
      'Almanac Properties' => 'Almanac Properties',
      'You do not have permission to create Almanac devices.' => 'You do not have permission to create Almanac devices.',
      '%s disabled this binding.' => '%s disabled this binding.',
      'Edit Almanac Network Configurations' => 'Edit Almanac Network Configurations',
      'You do not have permission to create Almanac namespaces.' => 'You do not have permission to create Almanac namespaces.',
      'This is an advanced feature which should normally be used only when building a Phabricator cluster. This feature is very dangerous if misused.' => 'This is an advanced feature which should normally be used only when building a Phabricator cluster. This feature is very dangerous if misused.',
      'Type an interface name...' => 'Type an interface name...',
      '%s created this namespace.' => '%s created this namespace.',
      'The public key corresponding to the given private key is not yet known to Phabricator. Associate the public key with an Almanac device in the web interface before registering hosts with it.' => 'The public key corresponding to the given private key is not yet known to Phabricator. Associate the public key with an Almanac device in the web interface before registering hosts with it.',
      'The device the interface is on.' => 'The device the interface is on.',
      'Can Create Devices' => 'Can Create Devices',
      'Interfaces must have a network.' => 'Interfaces must have a network.',
      'Browse Service Types' => 'Browse Service Types',
      'Almanac service, device, property, network and namespace names may only contain lowercase letters, numbers, hyphens, and periods.' => 'Almanac service, device, property, network and namespace names may only contain lowercase letters, numbers, hyphens, and periods.',
      'Search for services by name substring.' => 'Search for services by name substring.',
      'Get Almanac bindings for the service.' => 'Get Almanac bindings for the service.',
      'Get Almanac properties for the object.' => 'Get Almanac properties for the object.',
      'You do not have permission to create new cluster services.' => 'You do not have permission to create new cluster services.',
      'Almanac Device' => 'Almanac Device',
      '%s changed the address for this interface from %s to %s.' => '%s changed the address for this interface from %s to %s.',
      'This engine is used to edit Almanac bindings.' => 'This engine is used to edit Almanac bindings.',
      'Interface In Use' => 'Interface In Use',
      'Almanac device name to register.' => 'Almanac device name to register.',
      'Bindings must have a service.' => 'Bindings must have a service.',
      'Revoke trust of a public key.' => 'Revoke trust of a public key.',
      'Edit Almanac Service Configurations' => 'Edit Almanac Service Configurations',
      'This engine is used to edit Almanac namespaces.' => 'This engine is used to edit Almanac namespaces.',
      'Create an inventory of physical and virtual hosts and devices.' => 'Create an inventory of physical and virtual hosts and devices.',
      'Cluster Repository' => 'Cluster Repository',
      'Find services by type.' => 'Find services by type.',
      'Networks' => 'Networks',
      'Allow Writes' => 'Allow Writes',
      'Defines a repository service for use in a Phabricator cluster.' => 'Defines a repository service for use in a Phabricator cluster.',
      'This host has been registered as "%s" and a trusted keypair has been installed.' => 'This host has been registered as "%s" and a trusted keypair has been installed.',
      '%s renamed this device from %s to %s.' => '%s renamed this device from %s to %s.',
      'Service "%s" does not exist or could not be loaded!' => 'Service "%s" does not exist or could not be loaded!',
      'Search for devices with specific names.' => 'Search for devices with specific names.',
      'When deleting Almanac properties, each property name must be a string. The value at index "%s" is not a string.' => 'When deleting Almanac properties, each property name must be a string. The value at index "%s" is not a string.',
      'Read information about Almanac bindings.' => 'Read information about Almanac bindings.',
      'Service %s' => 'Service %s',
      'Non-cluster Devices Only' => 'Non-cluster Devices Only',
      'Edit Binding' => 'Edit Binding',
      'Apply transactions to create a new service or edit an existing one.' => 'Apply transactions to create a new service or edit an existing one.',
      'This host has device ID "%s", but there is no corresponding device record in Almanac.' => 'This host has device ID "%s", but there is no corresponding device record in Almanac.',
      'Both Cluster and Non-cluster Devices' => 'Both Cluster and Non-cluster Devices',
      'When creating a new Almanac binding via the Conduit API, you must provide a "service" transaction to select a service to bind.' => 'When creating a new Almanac binding via the Conduit API, you must provide a "service" transaction to select a service to bind.',
      'Edit Device: %s' => 'Edit Device: %s',
      'Device %s' => 'Device %s',
      'HOST REGISTERED' => 'HOST REGISTERED',
      'The port number of the interface.' => 'The port number of the interface.',
      '%s created this interface.' => '%s created this interface.',
      'You can not attach an interface to a device which you do not have permission to edit.' => 'You can not attach an interface to a device which you do not have permission to edit.',
      'Unable to change ownership of an identity file to daemon user "%s". Run this command as %s or root.' => 'Unable to change ownership of an identity file to daemon user "%s". Run this command as %s or root.',
      'You do not have permission to create Almanac namespaces within the "%s" namespace.' => 'You do not have permission to create Almanac namespaces within the "%s" namespace.',
      'Pass a map of values to set one or more properties.' => 'Pass a map of values to set one or more properties.',
      'Device "%s" is unrecognized, restricted, or you do not have permission to edit it.' => 'Device "%s" is unrecognized, restricted, or you do not have permission to edit it.',
      'Service type.' => 'Service type.',
      'You do not have permission to manage Almanac cluster services.' => 'You do not have permission to manage Almanac cluster services.',
      '%s created this binding.' => '%s created this binding.',
      'This engine is used to edit Almanac devices.' => 'This engine is used to edit Almanac devices.',
      'Transaction value when deleting Almanac properties must be a list of property names.' => 'Transaction value when deleting Almanac properties must be a list of property names.',
      'ID of the key to trust.' => 'ID of the key to trust.',
      'No such device "%s" exists!' => 'No such device "%s" exists!',
      'No Almanac namespaces found.' => 'No Almanac namespaces found.',
    );
  }

}
