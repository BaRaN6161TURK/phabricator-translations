<?php

final class PhabricatorAuthEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      '%s enabled login.' => '%s enabled login.',
      'Welcome to Phabricator!' => 'Welcome to Phabricator!',
      'This key has been revoked. Choose or generate a new, unique key.' => 'This key has been revoked. Choose or generate a new, unique key.',
      'SSH Key Actions' => 'SSH Key Actions',
      'Adding a PKCS8 keyfile to the cache can be very dangerous. If the PKCS8 file really encodes a different public key than the one specified, an attacker could use it to gain unauthorized access.
    Generally, you should use this option only in a development environment where ssh-keygen is broken and it is inconvenient to fix it, and only if you are certain you understand the risks. You should never cache a PKCS8 file you did not generate yourself.' => 'Adding a PKCS8 keyfile to the cache can be very dangerous. If the PKCS8 file really encodes a different public key than the one specified, an attacker could use it to gain unauthorized access.
    Generally, you should use this option only in a development environment where ssh-keygen is broken and it is inconvenient to fix it, and only if you are certain you understand the risks. You should never cache a PKCS8 file you did not generate yourself.',
      'This provider ("%s") already exists, and you can not add more than one instance of it. You can edit the existing provider, or you can choose a different provider.' => 'This provider ("%s") already exists, and you can not add more than one instance of it. You can edit the existing provider, or you can choose a different provider.',
      'Specify an OAuth client id with %s.' => 'Specify an OAuth client id with %s.',
      'The verification code you provided is incorrect, or the email address has been removed, or the email address is owned by another user. Make sure you followed the link in the email correctly and are logged in with the user account associated with the email address.' => 'The verification code you provided is incorrect, or the email address has been removed, or the email address is owned by another user. Make sure you followed the link in the email correctly and are logged in with the user account associated with the email address.',
      'Passwords' => 'Passwords',
      'To continue, add at least one authentication factor to your account.' => 'To continue, add at least one authentication factor to your account.',
      'Algorithm' => 'Algorithm',
      'You must specify the username of the account to recover.' => 'You must specify the username of the account to recover.',
      'Revoke Tokens' => 'Revoke Tokens',
      'This Phabricator install is not configured with any enabled authentication providers which can be used to log in. If you have accidentally locked yourself out by disabling all providers, you can use `%s` to recover access to an administrative account.' => 'This Phabricator install is not configured with any enabled authentication providers which can be used to log in. If you have accidentally locked yourself out by disabling all providers, you can use `%s` to recover access to an administrative account.',
      'An email has been sent with a link you can use to log in.' => 'An email has been sent with a link you can use to log in.',
      'There are too many configured default registration providers.' => 'There are too many configured default registration providers.',
      'Unlink "%s" Account?' => 'Unlink "%s" Account?',
      'Strip factors from specified users.' => 'Strip factors from specified users.',
      'You must confirm the selected password.' => 'You must confirm the selected password.',
      'Provider Implementation Missing!' => 'Provider Implementation Missing!',
      'Unknown session type "%s".' => 'Unknown session type "%s".',
      'Setup Admin Account' => 'Setup Admin Account',
      'To configure Bitbucket OAuth, log in to Bitbucket and go to **Manage Account** > **Access Management** > **OAuth**.
    Click **Add Consumer** and create a new application.
    After completing configuration, copy the **Key** and **Secret** to the fields above.' => 'To configure Bitbucket OAuth, log in to Bitbucket and go to **Manage Account** > **Access Management** > **OAuth**.
    Click **Add Consumer** and create a new application.
    After completing configuration, copy the **Key** and **Secret** to the fields above.',
      'The account you are attempting to register or link is already linked to another user.' => 'The account you are attempting to register or link is already linked to another user.',
      'The email address associated with this external account ("%s") is not a valid email address and can not be used to register a Phabricator account. Choose a different, valid address.' => 'The email address associated with this external account ("%s") is not a valid email address and can not be used to register a Phabricator account. Choose a different, valid address.',
      'Verify an unverified email address which is already attached to an account. This will also re-execute event hooks for addresses which are already verified.' => 'Verify an unverified email address which is already attached to an account. This will also re-execute event hooks for addresses which are already verified.',
      'Email Address' => 'Email Address',
      'Must Verify Email' => 'Must Verify Email',
      'SSH Key Type' => 'SSH Key Type',
      '%s enabled auto login.' => '%s enabled auto login.',
      'The email address ("%s") associated with the external account is already in use by an existing Phabricator account. Multiple Phabricator accounts may not have the same email address, so you can not use this email address to register a new Phabricator account.' => 'The email address ("%s") associated with the external account is already in use by an existing Phabricator account. Multiple Phabricator accounts may not have the same email address, so you can not use this email address to register a new Phabricator account.',
      'Invalid OAuth Access Token' => 'Invalid OAuth Access Token',
      'Verify Email' => 'Verify Email',
      'Revoke credentials for the specified object. To revoke credentials for a user, use "@username".' => 'Revoke credentials for the specified object. To revoke credentials for a user, use "@username".',
      'Phabricator already trusts OAuth client "%s".' => 'Phabricator already trusts OAuth client "%s".',
      'Phabricator will skip email verification for accounts registered through this provider.' => 'Phabricator will skip email verification for accounts registered through this provider.',
      'Path to public keyfile.' => 'Path to public keyfile.',
      'Strip all factors, regardless of type.' => 'Strip all factors, regardless of type.',
      'Enabled Providers' => 'Enabled Providers',
      'Account is already registered or linked.' => 'Account is already registered or linked.',
      '(Some types of token can not be revoked, and you can not revoke tokens which have already expired.)' => '(Some types of token can not be revoked, and you can not revoke tokens which have already expired.)',
      'The external account ("%s") you just authenticated with is not configured to allow account linking on this Phabricator install. An administrator may have recently disabled it.' => 'The external account ("%s") you just authenticated with is not configured to allow account linking on this Phabricator install. An administrator may have recently disabled it.',
      'Unable to Log In' => 'Unable to Log In',
      'If you want to link an existing Phabricator account to this external account, do not continue. Instead: log in to your existing account, then go to "Settings" and link the account in the "External Accounts" panel.' => 'If you want to link an existing Phabricator account to this external account, do not continue. Instead: log in to your existing account, then go to "Settings" and link the account in the "External Accounts" panel.',
      'Session has already signed required legalpad documents!' => 'Session has already signed required legalpad documents!',
      'On the plus side, that purple notification bubble will disappear.' => 'On the plus side, that purple notification bubble will disappear.',
      'This account ("%s") can not establish web sessions, so it is not possible to generate a functional recovery link. Special accounts like daemons and mailing lists can not log in via the web UI.' => 'This account ("%s") can not establish web sessions, so it is not possible to generate a functional recovery link. Special accounts like daemons and mailing lists can not log in via the web UI.',
      'Revoke credentials of the given type.' => 'Revoke credentials of the given type.',
      'LDAP Port' => 'LDAP Port',
      'Really trust this PKCS8 keyfile?' => 'Really trust this PKCS8 keyfile?',
      '%s updated the OAuth consumer key for this provider from "%s" to "%s".' => '%s updated the OAuth consumer key for this provider from "%s" to "%s".',
      'No such user "%s" to recover.' => 'No such user "%s" to recover.',
      'No public key was provided.' => 'No public key was provided.',
      'Phabricator base URI should include protocol (like "%s").' => 'Phabricator base URI should include protocol (like "%s").',
      'Log In with LDAP' => 'Log In with LDAP',
      'Specify the credential type to revoke with "--type" or specify "--everything". Use "--list" to list available credential types.' => 'Specify the credential type to revoke with "--type" or specify "--everything". Use "--list" to list available credential types.',
      'Start TLS after binding to the LDAP server.' => 'Start TLS after binding to the LDAP server.',
      'Condolences on forgetting your password. You can use this link to reset it:
      %s
    After you set a new password, consider writing it down on a sticky note and attaching it to your monitor so you don\'t forget again! Choosing a very short, easy-to-remember password like "cat" or "1234" might also help.
    Best Wishes,
    Phabricator
    ' => 'Condolences on forgetting your password. You can use this link to reset it:
      %s
    After you set a new password, consider writing it down on a sticky note and attaching it to your monitor so you don\'t forget again! Choosing a very short, easy-to-remember password like "cat" or "1234" might also help.
    Best Wishes,
    Phabricator
    ',
      'TOTP Code' => 'TOTP Code',
      'OAuth Consumer Key' => 'OAuth Consumer Key',
      'Account Not Refreshable' => 'Account Not Refreshable',
      'You can only recover the username for one account.' => 'You can only recover the username for one account.',
      'There are no matching tokens to revoke.' => 'There are no matching tokens to revoke.',
      '%s disabled email trust.' => '%s disabled email trust.',
      'Too Short' => 'Too Short',
      'Phabricator Base URI' => 'Phabricator Base URI',
      'The selected password is very weak: it is one of the most common passwords in use. Choose a stronger password.' => 'The selected password is very weak: it is one of the most common passwords in use. Choose a stronger password.',
      'LDAP Username: ' => 'LDAP Username: ',
      'That email address is not verified, but the account it is connected to has at least one other verified address. When an account has at least one verified address, you can only send password reset links to one of the verified addresses. Try a verified address instead.' => 'That email address is not verified, but the account it is connected to has at least one other verified address. When an account has at least one verified address, you can only send password reset links to one of the verified addresses. Try a verified address instead.',
      'Allow users to log in using this provider. If you disable login, users can still use account integrations for this provider.' => 'Allow users to log in using this provider. If you disable login, users can still use account integrations for this provider.',
      'Allow Login:' => 'Allow Login:',
      'Terminate Session?' => 'Terminate Session?',
      'Wrong Account' => 'Wrong Account',
      'Refresh tokens for a given user.' => 'Refresh tokens for a given user.',
      'Already Registered' => 'Already Registered',
      'Allow users to register new Phabricator accounts using this provider. If you disable registration, users can still use this provider to log in to existing accounts, but will not be able to create new accounts.' => 'Allow users to register new Phabricator accounts using this provider. If you disable registration, users can still use this provider to log in to existing accounts, but will not be able to create new accounts.',
      'SECURITY WARNING' => 'SECURITY WARNING',
      'This public key is already associated with another user or device. Each key must unambiguously identify a single unique owner.' => 'This public key is already associated with another user or device. Each key must unambiguously identify a single unique owner.',
      'Revoke credentials without prompting.' => 'Revoke credentials without prompting.',
      '%s set the OAuth consumer secret for this provider.' => '%s set the OAuth consumer secret for this provider.',
      'You are logged in as %s, but the email address (%s) you just clicked a link from is already associated with another account (%s). You can log out to switch accounts, or verify the address and attach it to your current account. Attach email address %s to user account %s?' => 'You are logged in as %s, but the email address (%s) you just clicked a link from is already associated with another account (%s). You can log out to switch accounts, or verify the address and attach it to your current account. Attach email address %s to user account %s?',
      'Phabricator already does not trust OAuth client "%s".' => 'Phabricator already does not trust OAuth client "%s".',
      'Username Attribute' => 'Username Attribute',
      'Before you can use Phabricator, you need to add multi-factor authentication to your account.' => 'Before you can use Phabricator, you need to add multi-factor authentication to your account.',
      'To learn more about multi-factor authentication, click the %s button below.' => 'To learn more about multi-factor authentication, click the %s button below.',
      'JIRA base URI is required.' => 'JIRA base URI is required.',
      'Attempted to set \'%s\' cookie to \'%s\', but your browser sent back a cookie with the value \'%s\'. Clear your browser\'s cookies and try again.' => 'Attempted to set \'%s\' cookie to \'%s\', but your browser sent back a cookie with the value \'%s\'. Clear your browser\'s cookies and try again.',
      'Always bind and search, even without a username and password.' => 'Always bind and search, even without a username and password.',
      'Skipping, provider is not enabled or does not exist.' => 'Skipping, provider is not enabled or does not exist.',
      'Allow users to link account credentials for this provider to existing Phabricator accounts. There is normally no reason to disable this unless you are trying to move away from a provider and want to stop users from creating new account links.' => 'Allow users to link account credentials for this provider to existing Phabricator accounts. There is normally no reason to disable this unless you are trying to move away from a provider and want to stop users from creating new account links.',
      'Does Not Allow Registration' => 'Does Not Allow Registration',
      'Path to corresponding PKCS8 key.' => 'Path to corresponding PKCS8 key.',
      'Strength' => 'Strength',
      'Enter LDAP Credentials' => 'Enter LDAP Credentials',
      'Email record ("%s") has bad associated user PHID ("%s").' => 'Email record ("%s") has bad associated user PHID ("%s").',
      'This email address has already been verified.' => 'This email address has already been verified.',
      'The password you entered is the same as another password associated with your account. Each password must be unique.' => 'The password you entered is the same as another password associated with your account. Each password must be unique.',
      'The email address you just clicked a link from is already the primary email address for a registered account (%s). Log in to continue.' => 'The email address you just clicked a link from is already the primary email address for a registered account (%s). Log in to continue.',
      'Cache the PKCS8 format of a public key. When developing on OSX, this can be used to work around issues with ssh-keygen. Use `%s` to generate a PKCS8 key to feed to this command.' => 'Cache the PKCS8 format of a public key. When developing on OSX, this can be used to work around issues with ssh-keygen. Use `%s` to generate a PKCS8 key to feed to this command.',
      'Revoke from all credential owners.' => 'Revoke from all credential owners.',
      'Invite has invalid author PHID ("%s").' => 'Invite has invalid author PHID ("%s").',
      'Use lowercase letters, digits, and periods. For example: %s' => 'Use lowercase letters, digits, and periods. For example: %s',
      'Anonymous Password' => 'Anonymous Password',
      'Use the button below to log in as: %s' => 'Use the button below to log in as: %s',
      '**Step 2 of 2**: In this step, you will configure JIRA.
    **Create a JIRA Application**: Log into JIRA and go to **Administration**, then **Add-ons**, then **Application Links**. Click the button labeled **Add Application Link**, and use these settings to create an application:
      - **Server URL**: `%s`
      - Then, click **Next**. On the second page:
      - **Application Name**: `Phabricator`
      - **Application Type**: `Generic Application`
      - Then, click **Create**.
    **Configure Your Application**: Find the application you just created in the table, and click the **Configure** link under **Actions**. Select **Incoming Authentication** and click the **OAuth** tab (it may be selected by default). Then, use these settings:
      - **Consumer Key**: Set this to the "Consumer Key" value in the form above.
      - **Consumer Name**: `Phabricator`
      - **Public Key**: Set this to the "Public Key" value in the form above.
      - **Consumer Callback URL**: `%s`
    Click **Save** in JIRA. Authentication should now be configured, and this provider should work correctly.' => '**Step 2 of 2**: In this step, you will configure JIRA.
    **Create a JIRA Application**: Log into JIRA and go to **Administration**, then **Add-ons**, then **Application Links**. Click the button labeled **Add Application Link**, and use these settings to create an application:
      - **Server URL**: `%s`
      - Then, click **Next**. On the second page:
      - **Application Name**: `Phabricator`
      - **Application Type**: `Generic Application`
      - Then, click **Create**.
    **Configure Your Application**: Find the application you just created in the table, and click the **Configure** link under **Actions**. Select **Incoming Authentication** and click the **OAuth** tab (it may be selected by default). Then, use these settings:
      - **Consumer Key**: Set this to the "Consumer Key" value in the form above.
      - **Consumer Name**: `Phabricator`
      - **Public Key**: Set this to the "Public Key" value in the form above.
      - **Consumer Callback URL**: `%s`
    Click **Save** in JIRA. Authentication should now be configured, and this provider should work correctly.',
      'Active OAuth Token' => 'Active OAuth Token',
      'Administrative approvals are disabled, so users who register will be able to use their accounts immediately. To enable approvals, configure %s.' => 'Administrative approvals are disabled, so users who register will be able to use their accounts immediately. To enable approvals, configure %s.',
      'Google' => 'Google',
      'Updated; Phabricator trusts OAuth client %s.' => 'Updated; Phabricator trusts OAuth client %s.',
      'Optionally, specify one or more comma-separated attributes to use to prefill the "Real Name" field when registering a new account. This is purely cosmetic and does not affect the login process, but can make registration a little easier.' => 'Optionally, specify one or more comma-separated attributes to use to prefill the "Real Name" field when registering a new account. This is purely cosmetic and does not affect the login process, but can make registration a little easier.',
      'You must enter an LDAP password.' => 'You must enter an LDAP password.',
      'Generate New Keypair' => 'Generate New Keypair',
      'Strip a specific factor type.' => 'Strip a specific factor type.',
      'You have successfully configured multi-factor authentication for your account.' => 'You have successfully configured multi-factor authentication for your account.',
      'Invite action is not a send action!' => 'Invite action is not a send action!',
      'This key is trusted. Trusted keys can not be edited. Use %s to revoke trust before editing the key.' => 'This key is trusted. Trusted keys can not be edited. Use %s to revoke trust before editing the key.',
      'Last Valid Account' => 'Last Valid Account',
      'user=%s, verified=%s, primary=%s, should_verify=%s' => 'user=%s, verified=%s, primary=%s, should_verify=%s',
      'NOTE: Any user who can browse to this install\'s login page will be able to register a Phabricator account. To restrict who can register an account, configure [[ %s | %s ]].' => 'NOTE: Any user who can browse to this install\'s login page will be able to register a Phabricator account. To restrict who can register an account, configure [[ %s | %s ]].',
      'Add Multi-Factor Auth' => 'Add Multi-Factor Auth',
      'You must enter an LDAP username.' => 'You must enter an LDAP username.',
      'Refresh LDAP Account' => 'Refresh LDAP Account',
      'The password and confirmation do not match.' => 'The password and confirmation do not match.',
      'Reset action counters so a user can continue taking rate-limited actions.' => 'Reset action counters so a user can continue taking rate-limited actions.',
      'No Providers Configured:' => 'No Providers Configured:',
      'If you continue, you will create a new account. You will not be able to link this external account to an existing account.' => 'If you continue, you will create a new account. You will not be able to link this external account to an existing account.',
      'Revokes all stored passwords.
    Account passwords and VCS passwords (used to access repositories over HTTP) will both be revoked. Passwords for any third party applications which use shared password infrastructure will also be revoked.
    Users will need to reset account passwords, possibly by using the "Forgot Password?" link on the login page. They will also need to reset VCS passwords.
    Passwords are revoked, not just removed. Users will be unable to select the passwords they used previously and must choose new, unique passwords.
    Revoking passwords will not terminate outstanding login sessions. Use the "session" revoker in conjunction with this revoker to force users to login again.' => 'Revokes all stored passwords.
    Account passwords and VCS passwords (used to access repositories over HTTP) will both be revoked. Passwords for any third party applications which use shared password infrastructure will also be revoked.
    Users will need to reset account passwords, possibly by using the "Forgot Password?" link on the login page. They will also need to reset VCS passwords.
    Passwords are revoked, not just removed. Users will be unable to select the passwords they used previously and must choose new, unique passwords.
    Revoking passwords will not terminate outstanding login sessions. Use the "session" revoker in conjunction with this revoker to force users to login again.',
      '%s set the OAuth consumer key for this provider to "%s".' => '%s set the OAuth consumer key for this provider to "%s".',
      'Launch the application on your phone, and add a new entry for this Phabricator install. When prompted, scan the QR code or manually enter the key shown below into the application.' => 'Launch the application on your phone, and add a new entry for this Phabricator install. When prompted, scan the QR code or manually enter the key shown below into the application.',
      'Multi-Factor Authentication Configured' => 'Multi-Factor Authentication Configured',
      'Connecting to LDAP...' => 'Connecting to LDAP...',
      'No matching SSH keys.' => 'No matching SSH keys.',
      'Authentication Error' => 'Authentication Error',
      'A keypair has been generated, and the public key has been added as a recognized key.' => 'A keypair has been generated, and the public key has been added as a recognized key.',
      'Edit Provider' => 'Edit Provider',
      'Auth' => 'Auth',
      'Provided public key is not properly formatted.' => 'Provided public key is not properly formatted.',
      '(You can not terminate your current login session. To terminate it, log out.)' => '(You can not terminate your current login session. To terminate it, log out.)',
      'Your account has been created, but needs to be approved by an administrator. You\'ll receive an email once your account is approved.' => 'Your account has been created, but needs to be approved by an administrator. You\'ll receive an email once your account is approved.',
      'Cached PKCS8 key for public key.' => 'Cached PKCS8 key for public key.',
      'Refreshing token, current token expires in %s seconds.' => 'Refreshing token, current token expires in %s seconds.',
      'Allows Registration' => 'Allows Registration',
      'Application ID is required.' => 'Application ID is required.',
      'You do not have a linked account on this provider, and thus can not refresh it.' => 'You do not have a linked account on this provider, and thus can not refresh it.',
      'To configure Facebook OAuth, create a new Facebook Application here:
    https://developers.facebook.com/apps
    You should use these settings in your application:
      - **Site URL**: Set this to `%s`
      - **Valid OAuth redirect URIs**: You should also set this to `%s`
      - **Client OAuth Login**: Set this to **OFF**.
      - **Embedded browser OAuth Login**: Set this to **OFF**.
    Some of these settings may be in the **Advanced** tab.
    After creating your new application, copy the **App ID** and **App Secret** to the fields above.' => 'To configure Facebook OAuth, create a new Facebook Application here:
    https://developers.facebook.com/apps
    You should use these settings in your application:
      - **Site URL**: Set this to `%s`
      - **Valid OAuth redirect URIs**: You should also set this to `%s`
      - **Client OAuth Login**: Set this to **OFF**.
      - **Embedded browser OAuth Login**: Set this to **OFF**.
    Some of these settings may be in the **Advanced** tab.
    After creating your new application, copy the **App ID** and **App Secret** to the fields above.',
      'Use the **OAuth App Notes** field to record details about which account the external application is registered under.' => 'Use the **OAuth App Notes** field to record details about which account the external application is registered under.',
      'firstname, lastname' => 'firstname, lastname',
      'Minimum length of %d characters.' => 'Minimum length of %s characters.',
      'This provider does not allow refreshing.' => 'This provider does not allow refreshing.',
      'One-Time Login Token' => 'One-Time Login Token',
      '%s revoked this password.' => '%s revoked this password.',
      'The id of the OAuth client.' => 'The id of the OAuth client.',
      'Target "%s" is not a valid target to revoke credentials from. Usually, revoke from "@username".' => 'Target "%s" is not a valid target to revoke credentials from. Usually, revoke from "@username".',
      'Set Phabricator to trust an OAuth client. Phabricator redirects to trusted OAuth clients that users have authorized without user intervention.' => 'Set Phabricator to trust an OAuth client. Phabricator redirects to trusted OAuth clients that users have authorized without user intervention.',
      'The email address you just clicked a link from is already associated with a registered account (%s), but is not verified. Log in to that account to continue. If you can not log in, you can register a new account.' => 'The email address you just clicked a link from is already associated with a registered account (%s), but is not verified. Log in to that account to continue. If you can not log in, you can register a new account.',
      'You are destroying an entire class of credentials. This may be very disruptive to users. You should normally do this only if you suspect there has been a widespread compromise which may have impacted everyone.' => 'You are destroying an entire class of credentials. This may be very disruptive to users. You should normally do this only if you suspect there has been a widespread compromise which may have impacted everyone.',
      'To configure Disqus OAuth, create a new application here:
    http://disqus.com/api/applications/
    Create an application, then adjust these settings:
      - **Callback URL:** Set this to `%s`
    After creating an application, copy the **Public Key** and **Secret Key** to the fields above (the **Public Key** goes in **OAuth App ID**).' => 'To configure Disqus OAuth, create a new application here:
    http://disqus.com/api/applications/
    Create an application, then adjust these settings:
      - **Callback URL:** Set this to `%s`
    After creating an application, copy the **Public Key** and **Secret Key** to the fields above (the **Public Key** goes in **OAuth App ID**).',
      'Special users like daemons and mailing lists are not permitted to log in via the web. Log in as a normal user instead.' => 'Special users like daemons and mailing lists are not permitted to log in via the web. Log in as a normal user instead.',
      'Use --type to specify which factor to strip, or --all-types to strip all factors. Use `auth list-factors` to show the available factor types.' => 'Use --type to specify which factor to strip, or --all-types to strip all factors. Use `auth list-factors` to show the available factor types.',
      'Revoke Token?' => 'Revoke Token?',
      'To configure WordPress.com OAuth, create a new WordPress.com Application here:
    https://developer.wordpress.com/apps/new/.
    You should use these settings in your application:
      - **URL:** Set this to your full domain with protocol. For this     Phabricator install, the correct value is: `%s`
      - **Redirect URL**: Set this to: `%s`
    Once you\'ve created an application, copy the **Client ID** and **Client Secret** into the fields above.' => 'To configure WordPress.com OAuth, create a new WordPress.com Application here:
    https://developer.wordpress.com/apps/new/.
    You should use these settings in your application:
      - **URL:** Set this to your full domain with protocol. For this     Phabricator install, the correct value is: `%s`
      - **Redirect URL**: Set this to: `%s`
    Once you\'ve created an application, copy the **Client ID** and **Client Secret** into the fields above.',
      'Asana' => 'Asana',
      'continue to Phabricator' => 'continue to Phabricator',
      'Terminate all login sessions.' => 'Terminate all login sessions.',
      'Send Another Email' => 'Send Another Email',
      'Failed to find an OAuth client with ID %s.' => 'Failed to find an OAuth client with ID %s.',
      'No Account Linked' => 'No Account Linked',
      'Slack' => 'Slack',
      'The external account ("%s") you just used to log in is already associated with another Phabricator user account. Log in to the other Phabricator account and unlink the external account before linking it to a new Phabricator account.' => 'The external account ("%s") you just used to log in is already associated with another Phabricator user account. Log in to the other Phabricator account and unlink the external account before linking it to a new Phabricator account.',
      'Refresh OAuth access tokens. This is primarily useful for development and debugging.' => 'Refresh OAuth access tokens. This is primarily useful for development and debugging.',
      'The OAuth provider returned an error: %s' => 'The OAuth provider returned an error: %s',
      'Empty account ID!' => 'Empty account ID!',
      'Registration Failed' => 'Registration Failed',
      'Unable to Verify Email' => 'Unable to Verify Email',
      'Public SSH Key' => 'Public SSH Key',
      'Username and password are required!' => 'Username and password are required!',
      'Disqus' => 'Disqus',
      'You will no longer be able to use this account to log in to Phabricator.' => 'You will no longer be able to use this account to log in to Phabricator.',
      'Expected \'%s\' in request!' => 'Expected \'%s\' in request!',
      '%s updated the OAuth application notes for this provider.' => '%s updated the OAuth application notes for this provider.',
      '%s updated the "%s" value.' => '%s updated the "%s" value.',
      'All Keys' => 'All Keys',
      'Terminate Sessions' => 'Terminate Sessions',
      'Upload Public Key' => 'Upload Public Key',
      'OAuth App Notes' => 'OAuth App Notes',
      'Your Phabricator account is already connected to an external account on this provider ("%s"), but you are currently logged in to the provider with a different account. Log out of the external service, then log back in with the correct account before refreshing the account link.' => 'Your Phabricator account is already connected to an external account on this provider ("%s"), but you are currently logged in to the provider with a different account. Log out of the external service, then log back in with the correct account before refreshing the account link.',
      'Log In (%s)' => 'Log In (%s)',
      'Skip This Step' => 'Skip This Step',
      'Do you want to disable this provider? Users will not be able to register or log in using linked accounts. If there are any users without other linked authentication mechanisms, they will no longer be able to log in. If you disable all providers, no one will be able to log in.' => 'Do you want to disable this provider? Users will not be able to register or log in using linked accounts. If there are any users without other linked authentication mechanisms, they will no longer be able to log in. If you disable all providers, no one will be able to log in.',
      'Login Failure' => 'Login Failure',
      'NOTE: Revoking passwords does not terminate existing sessions which were established using the old passwords. To terminate existing sessions, run the "session" revoker now.' => 'NOTE: Revoking passwords does not terminate existing sessions which were established using the old passwords. To terminate existing sessions, run the "session" revoker now.',
      '%s enabled account linking.' => '%s enabled account linking.',
      'Account Already Linked' => 'Account Already Linked',
      'Another user already has that email.' => 'Another user already has that email.',
      '%s Require users to enable \'secure browsing\' on Facebook in order to use Facebook to authenticate with Phabricator. This improves security by preventing an attacker from capturing an insecure Facebook session and escalating it into a Phabricator session. Enabling it is recommended.' => '%s Require users to enable \'secure browsing\' on Facebook in order to use Facebook to authenticate with Phabricator. This improves security by preventing an attacker from capturing an insecure Facebook session and escalating it into a Phabricator session. Enabling it is recommended.',
      'Your account has been disabled.' => 'Your account has been disabled.',
      'Forgot Password / Email Login' => 'Forgot Password / Email Login',
      'You can use this link to reset your Phabricator password:
      %s
    ' => 'You can use this link to reset your Phabricator password:
      %s
    ',
      'JIRA base URI should include protocol (like "https://").' => 'JIRA base URI should include protocol (like "https://").',
      'Authentication provider ("%s") encountered an error while attempting to log in. %s' => 'Authentication provider ("%s") encountered an error while attempting to log in. %s',
      'There are no matching factors to strip.' => 'There are no matching factors to strip.',
      'The invite code in the link you clicked is invalid. Check that you followed the link correctly.' => 'The invite code in the link you clicked is invalid. Check that you followed the link correctly.',
      'Twitter' => 'Twitter',
      'Unable to Generate Keys' => 'Unable to Generate Keys',
      'Specify the target to revoke credentials from with "--from" or specify "--everywhere".' => 'Specify the target to revoke credentials from with "--from" or specify "--everywhere".',
      'Log In or Register with LDAP' => 'Log In or Register with LDAP',
      'The external account you are registering with has an email address that is already in use ("%s") by an existing Phabricator account. Choose a new, valid email address to register a new Phabricator account.' => 'The external account you are registering with has an email address that is already in use ("%s") by an existing Phabricator account. Choose a new, valid email address to register a new Phabricator account.',
      'Revoke Public Key' => 'Revoke Public Key',
      'Login validation is missing expected parameter ("%s").' => 'Login validation is missing expected parameter ("%s").',
      'Next Step' => 'Next Step',
      '%s enabled account unlinking.' => '%s enabled account unlinking.',
      'The email address %s is now verified.' => 'The email address %s is now verified.',
      '%s disabled this provider.' => '%s disabled this provider.',
      'Not Installed' => 'Not Installed',
      'Your browser did not submit a "%s" cookie with client state information in the request. Check that cookies are enabled. If this problem persists, you may need to clear your cookies.' => 'Your browser did not submit a "%s" cookie with client state information in the request. Check that cookies are enabled. If this problem persists, you may need to clear your cookies.',
      'Found %s account(s) to refresh.' => 'Found %s account(s) to refresh.',
      'Leave high security and return your session to normal security levels?' => 'Leave high security and return your session to normal security levels?',
      'OAuth App Secret' => 'OAuth App Secret',
      'Skipping, provider has no stored refresh token.' => 'Skipping, provider has no stored refresh token.',
      'Really terminate session %s?' => 'Really terminate session %s?',
      'Revokes all SSH public keys.
    SSH public keys are revoked, not just removed. Users will need to generate and upload new, unique keys before they can access repositories or other services over SSH.' => 'Revokes all SSH public keys.
    SSH public keys are revoked, not just removed. Users will need to generate and upload new, unique keys before they can access repositories or other services over SSH.',
      'Terminate Sessions?' => 'Terminate Sessions?',
      '%s enabled email trust.' => '%s enabled email trust.',
      'End of dry run.' => 'End of dry run.',
      'Revoke credentials which may have been leaked or disclosed.' => 'Revoke credentials which may have been leaked or disclosed.',
      'Destroyed %s credential(s) of type "%s".' => 'Destroyed %s credential(s) of type "%s".',
      'List information about available credential revokers.' => 'List information about available credential revokers.',
      '%s set the OAuth application ID for this provider to "%s".' => '%s set the OAuth application ID for this provider to "%s".',
      'To configure Google OAuth, create a new \'API Project\' here:
    https://console.developers.google.com/
    Adjust these configuration settings for your project:
      - Under **APIs & auth > APIs**, scroll down the list and enable     the **Google+ API**.
         - You will need to consent to the **Google+ API** terms if you  have not before.
      - Under **APIs & auth > Credentials**, click **Create New Client    ID** in the **OAuth** section. Then use these settings:
         - **Application Type**: Web Application
         - **Authorized Javascript origins**: Leave this empty.
         - **Authorized redirect URI**: Set this to `%s`.
    After completing configuration, copy the **Client ID** and **Client Secret** from the Google console to the fields above.' => 'To configure Google OAuth, create a new \'API Project\' here:
    https://console.developers.google.com/
    Adjust these configuration settings for your project:
      - Under **APIs & auth > APIs**, scroll down the list and enable     the **Google+ API**.
         - You will need to consent to the **Google+ API** terms if you  have not before.
      - Under **APIs & auth > Credentials**, click **Create New Client    ID** in the **OAuth** section. Then use these settings:
         - **Application Type**: Web Application
         - **Authorized Javascript origins**: Leave this empty.
         - **Authorized redirect URI**: Set this to `%s`.
    After completing configuration, copy the **Client ID** and **Client Secret** from the Google console to the fields above.',
      'Skipping, provider does not support token refresh.' => 'Skipping, provider does not support token refresh.',
      'Attempting to upgrade password hasher, but the password for the upgrade is not the stored credential!' => 'Attempting to upgrade password hasher, but the password for the upgrade is not the stored credential!',
      'The OAuth provider failed to retrieve an account ID.' => 'The OAuth provider failed to retrieve an account ID.',
      'Reset action counters for this user.' => 'Reset action counters for this user.',
      'Edit SSH Key' => 'Edit SSH Key',
      'Attempting to set an empty password!' => 'Attempting to set an empty password!',
      'Welcome, %s. To complete the process of logging in, provide your multi-factor credentials.' => 'Welcome, %s. To complete the process of logging in, provide your multi-factor credentials.',
      'Already Accepted Invite' => 'Already Accepted Invite',
      'This provider is already configured.' => 'This provider is already configured.',
      '**JIRA Instance Name**
    Choose a permanent name for this instance of JIRA. Phabricator uses this name internally to keep track of this instance of JIRA, in case the URL changes later.
    Use lowercase letters, digits, and period. For example, `jira`, `jira.mycompany` or `jira.engineering` are reasonable names.' => '**JIRA Instance Name**
    Choose a permanent name for this instance of JIRA. Phabricator uses this name internally to keep track of this instance of JIRA, in case the URL changes later.
    Use lowercase letters, digits, and period. For example, `jira`, `jira.mycompany` or `jira.engineering` are reasonable names.',
      'No user exists with username "%s".' => 'No user exists with username "%s".',
      'Account does not match provider!' => 'Account does not match provider!',
      'Account Not Linkable' => 'Account Not Linkable',
      'ou=People, dc=example, dc=com' => 'ou=People, dc=example, dc=com',
      'Provide Multi-Factor Credentials' => 'Provide Multi-Factor Credentials',
      'You can make adjustments from the Settings panel later.' => 'You can make adjustments from the Settings panel later.',
      'You have failed to enter the correct account password too often in a short period of time.' => 'You have failed to enter the correct account password too often in a short period of time.',
      'Add Multi-Factor Authentication' => 'Add Multi-Factor Authentication',
      'JIRA instance name must contain only lowercase letters, digits, and period.' => 'JIRA instance name must contain only lowercase letters, digits, and period.',
      'Terminate Session' => 'Terminate Session',
      'You must choose a password.' => 'You must choose a password.',
      'Failed to find an OAuth client with id %s.' => 'Failed to find an OAuth client with id %s.',
      'Unlink Account?' => 'Unlink Account?',
      'You can only verify one address at a time.' => 'You can only verify one address at a time.',
      'SSH Key %d' => 'SSH Key %s',
      'Public key type should be one of: %s' => 'Public key type should be one of: %s',
      'App Code' => 'App Code',
      '%s edited a property of this provider.' => '%s edited a property of this provider.',
      'Auth Email Invites' => 'Auth Email Invites',
      '**Step 2 of 2 - Configure Phabricator OAuth Instance**
    To configure Phabricator OAuth, create a new application here:
    %s/oauthserver/client/create/
    When creating your application, use these settings:
      - **Redirect URI:** Set this to: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)' => '**Step 2 of 2 - Configure Phabricator OAuth Instance**
    To configure Phabricator OAuth, create a new application here:
    %s/oauthserver/client/create/
    When creating your application, use these settings:
      - **Redirect URI:** Set this to: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)',
      'Welcome to Phabricator' => 'Welcome to Phabricator',
      'Address Verified' => 'Address Verified',
      'You will no longer be able to use your %s account to log in to Phabricator.' => 'You will no longer be able to use your %s account to log in to Phabricator.',
      'DISABLE APPROVAL QUEUE' => 'DISABLE APPROVAL QUEUE',
      'No OAuth Access Token' => 'No OAuth Access Token',
      'You are already logged in.' => 'You are already logged in.',
      'The account you are attempting to register with uses a nonexistent or disabled authentication provider (with key "%s"). An administrator may have recently disabled this provider.' => 'The account you are attempting to register with uses a nonexistent or disabled authentication provider (with key "%s"). An administrator may have recently disabled this provider.',
      'Link LDAP Account' => 'Link LDAP Account',
      '%s turned "Require Secure Browsing" off.' => '%s turned "Require Secure Browsing" off.',
      'ldap.example.com' => 'ldap.example.com',
      'TOTP Sync Token' => 'TOTP Sync Token',
      'This password is associated with an object PHID ("%s") for a different object than the provided one ("%s").' => 'This password is associated with an object PHID ("%s") for a different object than the provided one ("%s").',
      'Username or Email' => 'Username or Email',
      'Verify this email address (%s) and attach it to your account (%s)?' => 'Verify this email address (%s) and attach it to your account (%s)?',
      'Revoke SSH Public Key' => 'Revoke SSH Public Key',
      'Before you can set up or use LDAP, you need to install the PHP LDAP extension. It is not currently installed, so PHP can not talk to LDAP. Usually you can install it with `%s`, `%s`, or a similar package manager command.' => 'Before you can set up or use LDAP, you need to install the PHP LDAP extension. It is not currently installed, so PHP can not talk to LDAP. Usually you can install it with `%s`, `%s`, or a similar package manager command.',
      'Anyone who can browse to this Phabricator install will be able to register an account. To add email domain restrictions, configure %s.' => 'Anyone who can browse to this Phabricator install will be able to register an account. To add email domain restrictions, configure %s.',
      'To configure Slack OAuth, create a new application here:
    https://api.slack.com/docs/sign-in-with-slack#create_slack_app
    When creating your application, use these settings:
      - **Redirect URI:** Set this to: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)' => 'To configure Slack OAuth, create a new application here:
    https://api.slack.com/docs/sign-in-with-slack#create_slack_app
    When creating your application, use these settings:
      - **Redirect URI:** Set this to: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)',
      'Amazon' => 'Amazon',
      'Your browser did not submit a registration key with the request. You must use the same browser to begin and complete registration. Check that cookies are enabled and try again.' => 'Your browser did not submit a registration key with the request. You must use the same browser to begin and complete registration. Check that cookies are enabled and try again.',
      'Unlink Account' => 'Unlink Account',
      'You must specify the path to a public keyfile with %s.' => 'You must specify the path to a public keyfile with %s.',
      'Remove multi-factor authentication from an account.' => 'Remove multi-factor authentication from an account.',
      'Edit Existing Provider' => 'Edit Existing Provider',
      'Add Authentication Provider' => 'Add Authentication Provider',
      'Do you want to enable this provider? Users will be able to log in to Phabricator using linked accounts.' => 'Do you want to enable this provider? Users will be able to log in to Phabricator using linked accounts.',
      'Signing session legalpad documents of user with no session!' => 'Signing session legalpad documents of user with no session!',
      'Phabricator base URI is required.' => 'Phabricator base URI is required.',
      'Verify this email address (%s) and attach it to your account?' => 'Verify this email address (%s) and attach it to your account?',
      'This account is not linkable.' => 'This account is not linkable.',
      'Allow Unlinking Accounts' => 'Allow Unlinking Accounts',
      'OAuth1 Account' => 'OAuth1 Account',
      '"%s" Account' => '"%s" Account',
      'Password Reset' => 'Password Reset',
      'Revoked SSH keys can not be edited or reinstated.' => 'Revoked SSH keys can not be edited or reinstated.',
      'Follow referrals. Disable this for Windows AD 2003.' => 'Follow referrals. Disable this for Windows AD 2003.',
      'user=%s, should_verify=%s' => 'user=%s, should_verify=%s',
      'The external account you just logged in with is not associated with a valid Phabricator user.' => 'The external account you just logged in with is not associated with a valid Phabricator user.',
      'If you do not recognize this change, it may indicate your account has been compromised.' => 'If you do not recognize this change, it may indicate your account has been compromised.',
      'Link Accounts' => 'Link Accounts',
      'Create Admin Account' => 'Create Admin Account',
      'No Such Account' => 'No Such Account',
      'Log Out?' => 'Log Out?',
      'Recover access to an account if you have locked yourself out of Phabricator.' => 'Recover access to an account if you have locked yourself out of Phabricator.',
      'To add an authentication factor, click the %s button below.' => 'To add an authentication factor, click the %s button below.',
      'You must verify your email address to log in. You should have a new email message from Phabricator with verification instructions in your inbox (%s).' => 'You must verify your email address to log in. You should have a new email message from Phabricator with verification instructions in your inbox (%s).',
      'The external account ("%s") you just authenticated with is not configured to allow logins on this Phabricator install. An administrator may have recently disabled it.' => 'The external account ("%s") you just authenticated with is not configured to allow logins on this Phabricator install. An administrator may have recently disabled it.',
      'To configure GitHub OAuth, create a new GitHub Application here:
    https://github.com/settings/applications/new
    You should use these settings in your application:
      - **URL:** Set this to your full domain with protocol. For this     Phabricator install, the correct value is: `%s`
      - **Callback URL**: Set this to: `%s`
    Once you\'ve created an application, copy the **Client ID** and **Client Secret** into the fields above.' => 'To configure GitHub OAuth, create a new GitHub Application here:
    https://github.com/settings/applications/new
    You should use these settings in your application:
      - **URL:** Set this to your full domain with protocol. For this     Phabricator install, the correct value is: `%s`
      - **Callback URL**: Set this to: `%s`
    Once you\'ve created an application, copy the **Client ID** and **Client Secret** into the fields above.',
      '%s disabled account linking.' => '%s disabled account linking.',
      'Confirm the link with this %s account. This account will be able to log in to your Phabricator account.' => 'Confirm the link with this %s account. This account will be able to log in to your Phabricator account.',
      'Strip these authentication factors?' => 'Strip these authentication factors?',
      'The OAuth provider did not return a "code" parameter in its response.' => 'The OAuth provider did not return a "code" parameter in its response.',
      'Specify the target to revoke credentials from with "--from" or specify "--everywhere", but not both.' => 'Specify the target to revoke credentials from with "--from" or specify "--everywhere", but not both.',
      'Your browser submitted a different registration key than the one associated with this account. You may need to clear your cookies.' => 'Your browser submitted a different registration key than the one associated with this account. You may need to clear your cookies.',
      'Strip factors from all users.' => 'Strip factors from all users.',
      'You are creating a new Phabricator account linked to an existing external account from outside Phabricator.' => 'You are creating a new Phabricator account linked to an existing external account from outside Phabricator.',
      'Facebook' => 'Facebook',
      'Really revoke all tokens? Among other temporary authorizations, this will disable any outstanding password reset or account recovery links.' => 'Really revoke all tokens? Among other temporary authorizations, this will disable any outstanding password reset or account recovery links.',
      'LDAP Version' => 'LDAP Version',
      'APPROVAL QUEUE' => 'APPROVAL QUEUE',
      '%s removed this password from the revocation list.' => '%s removed this password from the revocation list.',
      'To configure Asana OAuth, create a new application here:
    https://app.asana.com/-/account_api
    When creating your application, use these settings:
      - **App URL:** Set this to: `%s`
      - **Redirect URL:** Set this to: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above.' => 'To configure Asana OAuth, create a new application here:
    https://app.asana.com/-/account_api
    When creating your application, use these settings:
      - **App URL:** Set this to: `%s`
      - **Redirect URL:** Set this to: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above.',
      'After you download the private key, it will be destroyed. You will not be able to retrieve it if you lose your copy.' => 'After you download the private key, it will be destroyed. You will not be able to retrieve it if you lose your copy.',
      'After logging in you should set a password for your account, or link your account to an external account that you can use to authenticate in the future.' => 'After logging in you should set a password for your account, or link your account to an external account that you can use to authenticate in the future.',
      'Analyze and diagnose issues with LDAP configuration.' => 'Analyze and diagnose issues with LDAP configuration.',
      'Your session is no longer in high security.' => 'Your session is no longer in high security.',
      'Revoked' => 'Revoked',
      'The URI where the OAuth server instance of Phabricator is installed. For example: %s' => 'The URI where the OAuth server instance of Phabricator is installed. For example: %s',
      'Factor Name: %s' => 'Factor Name: %s',
      'Providers' => 'Providers',
      'Address Duplicated in Input' => 'Address Duplicated in Input',
      'Multi-factor authentication helps secure your account by making it more difficult for attackers to gain access or take sensitive actions.' => 'Multi-factor authentication helps secure your account by making it more difficult for attackers to gain access or take sensitive actions.',
      'Register an Account' => 'Register an Account',
      'Can Not Edit Trusted Key' => 'Can Not Edit Trusted Key',
      'OAuth App ID' => 'OAuth App ID',
      'Invites are visible to administrators, the inviting user, users with an invite code, and the user who accepts the invite.' => 'Invites are visible to administrators, the inviting user, users with an invite code, and the user who accepts the invite.',
      'Specified public keyfile "%s" does not exist!' => 'Specified public keyfile "%s" does not exist!',
      'You must specify the email to verify.' => 'You must specify the email to verify.',
      'The key "%s" will be permanently revoked, and you will no longer be able to use the corresponding private key to authenticate.' => 'The key "%s" will be permanently revoked, and you will no longer be able to use the corresponding private key to authenticate.',
      'Configure %s OAuth.' => 'Configure %s OAuth.',
      'The external account ("%s") you just authenticated with is not configured to allow registration on this Phabricator install. An administrator may have recently disabled it.' => 'The external account ("%s") you just authenticated with is not configured to allow registration on this Phabricator install. An administrator may have recently disabled it.',
      'No email exists with address "%s"!' => 'No email exists with address "%s"!',
      'Revoke SSH Key' => 'Revoke SSH Key',
      'You can not unlink this account because it is not linked.' => 'You can not unlink this account because it is not linked.',
      'Request did not include account key.' => 'Request did not include account key.',
      'Account Disabled' => 'Account Disabled',
      'JIRA instance name is required.' => 'JIRA instance name is required.',
      'LDAP Password' => 'LDAP Password',
      'Edit SSH Public Key' => 'Edit SSH Public Key',
      'Generated' => 'Generated',
      '%s updated the OAuth application secret for this provider.' => '%s updated the OAuth application secret for this provider.',
      'Leaving High Security' => 'Leaving High Security',
      '**Post a comment** in the JIRA task, similar to the emails Phabricator sends.' => '**Post a comment** in the JIRA task, similar to the emails Phabricator sends.',
      'Consumer key is required.' => 'Consumer key is required.',
      'Username or password are incorrect.' => 'Username or password are incorrect.',
      'Attempted to set \'%s\' cookie to \'%s\', but your browser did not accept the cookie. Check that cookies are enabled, clear them, and try again.' => 'Attempted to set \'%s\' cookie to \'%s\', but your browser did not accept the cookie. Check that cookies are enabled, clear them, and try again.',
      'The authentication provider did not return a client state parameter in its response, but one was expected. If this problem persists, you may need to clear your cookies.' => 'The authentication provider did not return a client state parameter in its response, but one was expected. If this problem persists, you may need to clear your cookies.',
      'TOTP Synchronization' => 'TOTP Synchronization',
      'One-Time Login' => 'One-Time Login',
      'NOTE: This provider **only supports JIRA 6**. It will not work with JIRA 5 or earlier.' => 'NOTE: This provider **only supports JIRA 6**. It will not work with JIRA 5 or earlier.',
      'SSH key name is required.' => 'SSH key name is required.',
      'Revokes all active login sessions.
    Affected users will be logged out and need to log in again.' => 'Revokes all active login sessions.
    Affected users will be logged out and need to log in again.',
      'Consumer secret is required.' => 'Consumer secret is required.',
      'Address Error' => 'Address Error',
      'Strip factors without prompting.' => 'Strip factors without prompting.',
      'No Matching Sessions' => 'No Matching Sessions',
      'Require Secure Browsing:' => 'Require Secure Browsing:',
      'Auth provider failed to load an account from %s!' => 'Auth provider failed to load an account from %s!',
      'Newly registered user "%s" is awaiting account approval by an administrator.' => 'Newly registered user "%s" is awaiting account approval by an administrator.',
      'There are no matching sessions to terminate.' => 'There are no matching sessions to terminate.',
      'No accounts match the arguments!' => 'No accounts match the arguments!',
      'Register New Account' => 'Register New Account',
      'SSH KEY DETAIL' => 'SSH KEY DETAIL',
      'Failed to convert public key into PKCS8 format. If you are developing on OSX, you may be able to use `%s` to work around this issue. %s' => 'Failed to convert public key into PKCS8 format. If you are developing on OSX, you may be able to use `%s` to work around this issue. %s',
      'Actual exception: %s' => 'Actual exception: %s',
      'Are you sure you want to log out?' => 'Are you sure you want to log out?',
      '(WARNING) Examine the table below for information on how password hashes will be stored in the database.
    (NOTE) You can select a minimum password length by setting `%s` in configuration.' => '(WARNING) Examine the table below for information on how password hashes will be stored in the database.
    (NOTE) You can select a minimum password length by setting `%s` in configuration.',
      'Link Account' => 'Link Account',
      'Bad password should not match.' => 'Bad password should not match.',
      'Login/Registration' => 'Login/Registration',
      'List available multi-factor authentication factors.' => 'List available multi-factor authentication factors.',
      'Account Recovery' => 'Account Recovery',
      'Trusted' => 'Trusted',
      'Use %s to specify which user to strip factors from, or %s to strip factors from all users.' => 'Use %s to specify which user to strip factors from, or %s to strip factors from all users.',
      'You must specify the path to a pkcs8 keyfile with %s.' => 'You must specify the path to a pkcs8 keyfile with %s.',
      'Email Sent' => 'Email Sent',
      'Twitch.tv' => 'Twitch.tv',
      'Show factors, but do not strip them.' => 'Show factors, but do not strip them.',
      'Add Multi-Factor Authentication To Your Account' => 'Add Multi-Factor Authentication To Your Account',
      'Auth Providers' => 'Auth Providers',
      'View Active Keys' => 'View Active Keys',
      'You must select an authentication provider.' => 'You must select an authentication provider.',
      'Auth Password' => 'Auth Password',
      'SSH Key %d: %s' => 'SSH Key %s: %s',
      'Phabricator will not retain a copy of the private key.' => 'Phabricator will not retain a copy of the private key.',
      'Refreshed token, new token expires in %s seconds.' => 'Refreshed token, new token expires in %s seconds.',
      '%s set the OAuth application secret for this provider.' => '%s set the OAuth application secret for this provider.',
      '%s, exception=%s' => '%s, exception=%s',
      'Reset %s action(s).' => 'Reset %s action(s).',
      'Address Already Verified' => 'Address Already Verified',
      'You are trying to gain access to an account ("%s") that can not establish a web session.' => 'You are trying to gain access to an account ("%s") that can not establish a web session.',
      'Sent By' => 'Sent By',
      'The email address associated with this account ("%s") is already in use by an application and can not be used to register a new Phabricator account. Choose a different, valid address.' => 'The email address associated with this account ("%s") is already in use by an application and can not be used to register a new Phabricator account. Choose a different, valid address.',
      'Download Private Key (%s)' => 'Download Private Key (%s)',
      'Make sure you are copy-and-pasting the entire link into your browser. Login links are only valid for 24 hours, and can only be used once.' => 'Make sure you are copy-and-pasting the entire link into your browser. Login links are only valid for 24 hours, and can only be used once.',
      '%s disabled login.' => '%s disabled login.',
      'Unverified User Email' => 'Unverified User Email',
      'Really revoke this token? Any temporary authorization it enables will be disabled.' => 'Really revoke this token? Any temporary authorization it enables will be disabled.',
      'The URI where JIRA is installed. For example: %s' => 'The URI where JIRA is installed. For example: %s',
      'Set Account Password' => 'Set Account Password',
      'Forgot your password?' => 'Forgot your password?',
      'Raw Address' => 'Raw Address',
      'Reset all counters.' => 'Reset all counters.',
      'Install Instructions' => 'Install Instructions',
      'Download Private Key' => 'Download Private Key',
      'Query public keys.' => 'Query public keys.',
      'After logging in, you can use the "Auth" application to add or restore authentication providers and allow normal logins to succeed.' => 'After logging in, you can use the "Auth" application to add or restore authentication providers and allow normal logins to succeed.',
      'Authentication Canceled' => 'Authentication Canceled',
      'Phabricator Instance Name' => 'Phabricator Instance Name',
      'Will Ignore Address' => 'Will Ignore Address',
      '**Step 1 of 2**: Provide the name and URI for your JIRA install.
    In the next step, you will configure JIRA.' => '**Step 1 of 2**: Provide the name and URI for your JIRA install.
    In the next step, you will configure JIRA.',
      'Login Required' => 'Login Required',
      'Verified User Email' => 'Verified User Email',
      'Trust Email Addresses' => 'Trust Email Addresses',
      'Bitbucket' => 'Bitbucket',
      'Allow users to unlink account credentials for this provider from existing Phabricator accounts. If you disable this, Phabricator accounts will be permanently bound to provider accounts.' => 'Allow users to unlink account credentials for this provider from existing Phabricator accounts. If you disable this, Phabricator accounts will be permanently bound to provider accounts.',
      'Unable to find LDAP account!' => 'Unable to find LDAP account!',
      'This workflow will generate a new SSH keypair, add the public key, and let you download the private key.' => 'This workflow will generate a new SSH keypair, add the public key, and let you download the private key.',
      'Too many login failures recently. You must submit a CAPTCHA with your login request.' => 'Too many login failures recently. You must submit a CAPTCHA with your login request.',
      'Specified pkcs8 keyfile "%s" does not exist!' => 'Specified pkcs8 keyfile "%s" does not exist!',
      'To configure Twitch.tv OAuth, create a new application here:
    http://www.twitch.tv/settings/applications
    When creating your application, use these settings:
      - **Redirect URI:** Set this to: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)' => 'To configure Twitch.tv OAuth, create a new application here:
    http://www.twitch.tv/settings/applications
    When creating your application, use these settings:
      - **Redirect URI:** Set this to: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)',
      'Do you want to enable this provider? Users will be able to use their existing external accounts to register new Phabricator accounts and log in using linked accounts.' => 'Do you want to enable this provider? Users will be able to use their existing external accounts to register new Phabricator accounts and log in using linked accounts.',
      'You have already accepted this invitation.' => 'You have already accepted this invitation.',
      'You must choose a password or skip this step.' => 'You must choose a password or skip this step.',
      '%s
    To configure Amazon OAuth, create a new \'API Project\' here:
    http://login.amazon.com/manageApps
    Use these settings:
      - **Allowed Return URLs:** Add this: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above.' => '%s
    To configure Amazon OAuth, create a new \'API Project\' here:
    http://login.amazon.com/manageApps
    Use these settings:
      - **Allowed Return URLs:** Add this: `%s`
    After completing configuration, copy the **Client ID** and **Client Secret** to the fields above.',
      'CAPTCHA was not entered correctly.' => 'CAPTCHA was not entered correctly.',
      'Configure JIRA OAuth. NOTE: Only supports JIRA 6.' => 'Configure JIRA OAuth. NOTE: Only supports JIRA 6.',
      'The account you are attempting to register with has an invalid email address (%s). This Phabricator install only allows registration with specific email addresses:' => 'The account you are attempting to register with has an invalid email address (%s). This Phabricator install only allows registration with specific email addresses:',
      'If you did not receive an email, you can click the button below to try sending another one.' => 'If you did not receive an email, you can click the button below to try sending another one.',
      'Invite template does not include invite URI!' => 'Invite template does not include invite URI!',
      'Password providers can\'t be linked.' => 'Password providers can\'t be linked.',
      'Found LDAP Account: %s' => 'Found LDAP Account: %s',
      '%s reinstated this key.' => '%s reinstated this key.',
      'Confirm Account Link' => 'Confirm Account Link',
      'Verify Email Address' => 'Verify Email Address',
      'You must log in to take this action.' => 'You must log in to take this action.',
      '%s created this password.' => '%s created this password.',
      'Stay' => 'Stay',
      'The account you are attempting to log in with uses a nonexistent or disabled authentication provider (with key "%s"). An administrator may have recently disabled this provider.' => 'The account you are attempting to log in with uses a nonexistent or disabled authentication provider (with key "%s"). An administrator may have recently disabled this provider.',
      'Two authentication providers use the same provider key (\'%s\'). Each provider must be identified by a unique key.' => 'Two authentication providers use the same provider key (\'%s\'). Each provider must be identified by a unique key.',
      'Create a New Account' => 'Create a New Account',
      'Example: %s%sFor LDAPS, use: %s' => 'Example: %s%sFor LDAPS, use: %s',
      'There is no account associated with that email address.' => 'There is no account associated with that email address.',
      'Revoke Token' => 'Revoke Token',
      'Refresh Account Link' => 'Refresh Account Link',
      'Enable Referrals' => 'Enable Referrals',
      'The LDAP extension is not enabled.' => 'The LDAP extension is not enabled.',
      'Will Send Invite' => 'Will Send Invite',
      'Can Manage Auth Providers' => 'Can Manage Auth Providers',
      'There are no registered session engine extensions.' => 'There are no registered session engine extensions.',
      'Revokes all Conduit API tokens used to access the API.
    Users will need to use `arc install-certificate` to install new API tokens before `arc` commands will work. Bots and scripts which access the API will need to have new tokens generated and installed.' => 'Revokes all Conduit API tokens used to access the API.
    Users will need to use `arc install-certificate` to install new API tokens before `arc` commands will work. Bots and scripts which access the API will need to have new tokens generated and installed.',
      'JIRA' => 'JIRA',
      'Permanent Account Link' => 'Permanent Account Link',
      '%s updated the OAuth consumer secret for this provider.' => '%s updated the OAuth consumer secret for this provider.',
      'ActiveDirectory Domain' => 'ActiveDirectory Domain',
      'First, download an authenticator application on your phone. Two applications which work well are **Authy** and **Google Authenticator**, but any other TOTP application should also work.' => 'First, download an authenticator application on your phone. Two applications which work well are **Authy** and **Google Authenticator**, but any other TOTP application should also work.',
      'Very Weak' => 'Very Weak',
      'Wait For Approval' => 'Wait For Approval',
      'Wrong Acount' => 'Wrong Acount',
      'If you want to register a new account, continue with this registration workflow and choose a new, unique email address for the new account.' => 'If you want to register a new account, continue with this registration workflow and choose a new, unique email address for the new account.',
      'Unable to Establish Web Session' => 'Unable to Establish Web Session',
      'Mobile Phone App (TOTP)' => 'Mobile Phone App (TOTP)',
      'Normal Security Restored' => 'Normal Security Restored',
      'Verify %s' => 'Verify %s',
      'Create **Issue Link** to the Revision, as an "implemented in" relationship.' => 'Create **Issue Link** to the Revision, as an "implemented in" relationship.',
      'Link External Account' => 'Link External Account',
      'Password Reset Token' => 'Password Reset Token',
      'The selected password is too short. Passwords must be a minimum of %s characters long.' => 'The selected password is too short. Passwords must be a minimum of %s characters long.',
      'Base Distinguished Name' => 'Base Distinguished Name',
      'You do not have permission to manage authentication providers.' => 'You do not have permission to manage authentication providers.',
      'Allow Registration:' => 'Allow Registration:',
      'Really terminate all sessions? (Your current login session will not be terminated.)' => 'Really terminate all sessions? (Your current login session will not be terminated.)',
      'Provide a public key, not a private key!' => 'Provide a public key, not a private key!',
      'Session is not partial!' => 'Session is not partial!',
      'Users will only be able to register with a verified email address at one of the configured [[ %s | %s ]] domains: **%s**' => 'Users will only be able to register with a verified email address at one of the configured [[ %s | %s ]] domains: **%s**',
      'You are logged in as %s, but the email address you just clicked a link from is already the primary email address for another account (%s). Switch accounts, then try again.' => 'You are logged in as %s, but the email address you just clicked a link from is already the primary email address for another account (%s). Switch accounts, then try again.',
      '%s set the "%s" value to "%s".' => '%s set the "%s" value to "%s".',
      'Confirm External Account Link' => 'Confirm External Account Link',
      'Terminate all web login sessions. If called via OAuth, also terminate the current OAuth token.
    WARNING: This method does what it claims on the label. If you call this method via the test console in the web UI, it will log you out!' => 'Terminate all web login sessions. If called via OAuth, also terminate the current OAuth token.
    WARNING: This method does what it claims on the label. If you call this method via the test console in the web UI, it will log you out!',
      'Authentication Tokens' => 'Authentication Tokens',
      '%s upgraded the hash algorithm for this password from "%s" to "%s".' => '%s upgraded the hash algorithm for this password from "%s" to "%s".',
      'Multi-Factor Login' => 'Multi-Factor Login',
      '%s disabled registration.' => '%s disabled registration.',
      'AuthAdapter (of class \'%s\') has an invalid implementation: no adapter domain.' => 'AuthAdapter (of class \'%s\') has an invalid implementation: no adapter domain.',
      'Edit Auth Provider' => 'Edit Auth Provider',
      'Verification code can not be regenerated after an invite is created.' => 'Verification code can not be regenerated after an invite is created.',
      '[SSH Key]' => '[SSH Key]',
      'Stripping authentication factors...' => 'Stripping authentication factors...',
      '[Phabricator] Password Reset' => '[Phabricator] Password Reset',
      'To configure Twitter OAuth, create a new application here:
    https://dev.twitter.com/apps
    When creating your application, use these settings:
      - **Callback URL:** Set this to: `%s`
    After completing configuration, copy the **Consumer Key** and **Consumer Secret** to the fields above.' => 'To configure Twitter OAuth, create a new application here:
    https://dev.twitter.com/apps
    When creating your application, use these settings:
      - **Callback URL:** Set this to: `%s`
    After completing configuration, copy the **Consumer Key** and **Consumer Secret** to the fields above.',
      '%s updated the public key material for this SSH key.' => '%s updated the public key material for this SSH key.',
      '%s created this key.' => '%s created this key.',
      'Another verification email was sent to %s.' => 'Another verification email was sent to %s.',
      'Mobile App (TOTP)' => 'Mobile App (TOTP)',
      'Set Phabricator to not trust an OAuth client. Phabricator redirects to trusted OAuth clients that users have authorized without user intervention.' => 'Set Phabricator to not trust an OAuth client. Phabricator redirects to trusted OAuth clients that users have authorized without user intervention.',
      '%s turned "Require Secure Browsing" on.' => '%s turned "Require Secure Browsing" on.',
      'The invite code in the link you clicked has already been accepted.' => 'The invite code in the link you clicked has already been accepted.',
      'If you leave high security, you will need to authenticate again the next time you try to take a high security action.' => 'If you leave high security, you will need to authenticate again the next time you try to take a high security action.',
      'NOTE: Amazon **requires** HTTPS, but your Phabricator install does not use HTTPS. **You will not be able to add Amazon as an authentication provider until you configure HTTPS on this install**.' => 'NOTE: Amazon **requires** HTTPS, but your Phabricator install does not use HTTPS. **You will not be able to add Amazon as an authentication provider until you configure HTTPS on this install**.',
      'Link %s Account' => 'Link %s Account',
      'The LDAP authentication provider is not enabled.' => 'The LDAP authentication provider is not enabled.',
      'New User "%s" Awaiting Approval' => 'New User "%s" Awaiting Approval',
      'Really destroy credentials everywhere?' => 'Really destroy credentials everywhere?',
      'Refresh Account' => 'Refresh Account',
      'Failed to digest password: object ("%s") did not return an opaque envelope with a password digest.' => 'Failed to digest password: object ("%s") did not return an opaque envelope with a password digest.',
      'Optionally, specify a username attribute to use to prefill usernames when registering a new account. This is purely cosmetic and does not affect the login process, but you can configure it to make sure users get the same default username as their LDAP username, so usernames remain consistent across systems.' => 'Optionally, specify a username attribute to use to prefill usernames when registering a new account. This is purely cosmetic and does not affect the login process, but you can configure it to make sure users get the same default username as their LDAP username, so usernames remain consistent across systems.',
      'ldaps://ldaps.example.com/' => 'ldaps://ldaps.example.com/',
      'sn' => 'sn',
      'This provider is not configured to allow linking.' => 'This provider is not configured to allow linking.',
      '%s created this provider.' => '%s created this provider.',
      'Revokes temporary authentication tokens.
    Temporary tokens are used in password reset mail, welcome mail, and by some other systems like Git LFS. Revoking temporary tokens will invalidate existing links in password reset and invite mail that was sent before the revocation occurred.' => 'Revokes temporary authentication tokens.
    Temporary tokens are used in password reset mail, welcome mail, and by some other systems like Git LFS. Revoking temporary tokens will invalidate existing links in password reset and invite mail that was sent before the revocation occurred.',
      'The account you are attempting to link is already linked to your account.' => 'The account you are attempting to link is already linked to your account.',
      'Refresh tokens for a given domain.' => 'Refresh tokens for a given domain.',
      'JIRA Instance Name' => 'JIRA Instance Name',
      '%s updated the OAuth application ID for this provider from "%s" to "%s".' => '%s updated the OAuth application ID for this provider from "%s" to "%s".',
      '%s enabled registration.' => '%s enabled registration.',
      'The PHP \'openssl\' extension is not installed. You must install this extension in order to add a JIRA authentication provider, because JIRA OAuth requests use the RSA-SHA1 signing algorithm. Install the \'openssl\' extension, restart Phabricator, and try again.' => 'The PHP \'openssl\' extension is not installed. You must install this extension in order to add a JIRA authentication provider, because JIRA OAuth requests use the RSA-SHA1 signing algorithm. Install the \'openssl\' extension, restart Phabricator, and try again.',
      'Unable to load your OAuth1 token secret from storage. It may have expired. Try authenticating again.' => 'Unable to load your OAuth1 token secret from storage. It may have expired. Try authenticating again.',
      'Register Account' => 'Register Account',
      'Awesome' => 'Awesome',
      '%s set the OAuth application notes for this provider.' => '%s set the OAuth application notes for this provider.',
      'Credential type "%s" is not valid. Valid credential types are: %s.' => 'Credential type "%s" is not valid. Valid credential types are: %s.',
      'Generate Keypair' => 'Generate Keypair',
      'The account you are attempting to register with already belongs to another user.' => 'The account you are attempting to register with already belongs to another user.',
      '%s changed the "%s" value from "%s" to "%s".' => '%s changed the "%s" value from "%s" to "%s".',
      'You canceled authentication.' => 'You canceled authentication.',
      'You can not unlink this account because you have no other valid login accounts. If you removed it, you would be unable to log in. Add another authentication method before removing this one.' => 'You can not unlink this account because you have no other valid login accounts. If you removed it, you would be unable to log in. Add another authentication method before removing this one.',
      'Accepted By' => 'Accepted By',
      'Attempting to operate on multi-factor auth which has no corresponding implementation (factor key is "%s").' => 'Attempting to operate on multi-factor auth which has no corresponding implementation (factor key is "%s").',
      'You can not unlink this account because the administrator has configured Phabricator to make links to %s accounts permanent.' => 'You can not unlink this account because the administrator has configured Phabricator to make links to %s accounts permanent.',
      'Requiring a high-security session from a user with no session!' => 'Requiring a high-security session from a user with no session!',
      '%s revoked this key.' => '%s revoked this key.',
      'OAuth1 Handshake Token' => 'OAuth1 Handshake Token',
      '**Step 1 of 2 - Name Phabricator OAuth Instance**
    Choose a permanent name for the OAuth server instance of Phabricator. //This// instance of Phabricator uses this name internally to keep track of the OAuth server instance of Phabricator, in case the URL changes later.' => '**Step 1 of 2 - Name Phabricator OAuth Instance**
    Choose a permanent name for the OAuth server instance of Phabricator. //This// instance of Phabricator uses this name internally to keep track of the OAuth server instance of Phabricator, in case the URL changes later.',
      'Captcha response is incorrect, try again.' => 'Captcha response is incorrect, try again.',
      'Add Auth Provider' => 'Add Auth Provider',
      'Auth Factor' => 'Auth Factor',
      'Confirm Link' => 'Confirm Link',
      'You can try again, or request a new link via email.' => 'You can try again, or request a new link via email.',
      'Create New Account' => 'Create New Account',
      'Log In' => 'Log In',
      'Temporary Token Types' => 'Temporary Token Types',
      'ERROR: You are making a Conduit API request to "%s", but the correct HTTP request path to use in order to access a COnduit method is "%s" (for example, "%s"). Check your configuration.' => 'ERROR: You are making a Conduit API request to "%s", but the correct HTTP request path to use in order to access a COnduit method is "%s" (for example, "%s"). Check your configuration.',
      'Register' => 'Register',
      'Anonymous Username' => 'Anonymous Username',
      '%s disabled auto login.' => '%s disabled auto login.',
      'You can not "--list" and revoke credentials (with "--from" or "--everywhere") in the same operation.' => 'You can not "--list" and revoke credentials (with "--from" or "--everywhere") in the same operation.',
      'LDAP' => 'LDAP',
      'The account you are attempting to register with uses an authentication provider ("%s") which does not allow registration. An administrator may have recently disabled registration with this provider.' => 'The account you are attempting to register with uses an authentication provider ("%s") which does not allow registration. An administrator may have recently disabled registration with this provider.',
      'Already Accepted' => 'Already Accepted',
      'Specify an OAuth client ID with %s.' => 'Specify an OAuth client ID with %s.',
      'You are logged in as %s, but the email address you just clicked a link from is already verified and associated with another account (%s). Switch accounts, then try again.' => 'You are logged in as %s, but the email address you just clicked a link from is already verified and associated with another account (%s). Switch accounts, then try again.',
      'Stronger algorithms are listed first. The highlighted algorithm will be used when storing new hashes. Older hashes will be upgraded to the best algorithm over time.' => 'Stronger algorithms are listed first. The highlighted algorithm will be used when storing new hashes. Older hashes will be upgraded to the best algorithm over time.',
      'These auth factors will be stripped:' => 'These auth factors will be stripped:',
      'Engine: Session' => 'Engine: Session',
      'Refresh tokens for a given provider type.' => 'Refresh tokens for a given provider type.',
      'Upload SSH Public Key' => 'Upload SSH Public Key',
      'Phabricator will automatically login with this provider if it is the only available provider.' => 'Phabricator will automatically login with this provider if it is the only available provider.',
      'No such user "%s"!' => 'No such user "%s"!',
      'Wait for Approval' => 'Wait for Approval',
      'SSH key material is required.' => 'SSH key material is required.',
      'Application secret is required.' => 'Application secret is required.',
      'Authentication Failure' => 'Authentication Failure',
      'Use %s to choose a user to reset actions for.' => 'Use %s to choose a user to reset actions for.',
      'Continue to Phabricator' => 'Continue to Phabricator',
      'Log in to Phabricator' => 'Log in to Phabricator',
      'LDAP Username' => 'LDAP Username',
      'Parsed Address' => 'Parsed Address',
      'Authentication Sessions' => 'Authentication Sessions',
      'Search Attributes' => 'Search Attributes',
      'Attach a mobile authenticator application (like Authy or Google Authenticator) to your account. When you need to authenticate, you will enter a code shown on your phone.' => 'Attach a mobile authenticator application (like Authy or Google Authenticator) to your account. When you need to authenticate, you will enter a code shown on your phone.',
      'The login link you clicked is invalid, out of date, or has already been used.' => 'The login link you clicked is invalid, out of date, or has already been used.',
      '%s You have not added authentication providers yet. Use "%s" to add a provider, which will let users register new Phabricator accounts and log in.' => '%s You have not added authentication providers yet. Use "%s" to add a provider, which will let users register new Phabricator accounts and log in.',
      'Revoke all credentials types.' => 'Revoke all credentials types.',
      'Good password should match.' => 'Good password should match.',
      'Specify either specific factors with --type, or all factors with --all-types, but not both.' => 'Specify either specific factors with --type, or all factors with --all-types, but not both.',
      'Previously Invited' => 'Previously Invited',
      'Updated; Phabricator does not trust OAuth client %s.' => 'Updated; Phabricator does not trust OAuth client %s.',
      'Phabricator is configured with an email domain whitelist (in %s), so only users with a verified email address at one of these %s allowed domain(s) will be able to register an account: %s' => 'Phabricator is configured with an email domain whitelist (in %s), so only users with a verified email address at one of these %s allowed domain(s) will be able to register an account: %s',
      'Allow Auto Login' => 'Allow Auto Login',
      'Expected invite accepted (%s).' => 'Expected invite accepted (%s).',
      'Note: Unlinking an authentication provider will terminate any other active login sessions.' => 'Note: Unlinking an authentication provider will terminate any other active login sessions.',
      '%s renamed this key from "%s" to "%s".' => '%s renamed this key from "%s" to "%s".',
      'Allow Linking Accounts' => 'Allow Linking Accounts',
      'Phabricator instance name must contain only lowercase letters, digits, and periods.' => 'Phabricator instance name must contain only lowercase letters, digits, and periods.',
      'Always Search' => 'Always Search',
      'Use this link to recover access to the "%s" account from the web interface:' => 'Use this link to recover access to the "%s" account from the web interface:',
      'Your Phabricator account is already linked to an external account for this provider.' => 'Your Phabricator account is already linked to an external account for this provider.',
      'You can safely ignore these warnings if the install itself has access controls (for example, it is deployed on a VPN) or if all of the configured providers have access controls (for example, they are all private LDAP or OAuth servers).' => 'You can safely ignore these warnings if the install itself has access controls (for example, it is deployed on a VPN) or if all of the configured providers have access controls (for example, they are all private LDAP or OAuth servers).',
      'SSH keys inherit the policies of the user or object they authenticate.' => 'SSH keys inherit the policies of the user or object they authenticate.',
      'Check Your Email' => 'Check Your Email',
      'Phabricator instance name is required.' => 'Phabricator instance name is required.',
      'Set Password' => 'Set Password',
      'AuthAdapter (of class \'%s\') has an invalid implementation: no adapter type.' => 'AuthAdapter (of class \'%s\') has an invalid implementation: no adapter type.',
      'Captcha' => 'Captcha',
      'Email record has invalid user PHID!' => 'Email record has invalid user PHID!',
      'No Matching Tokens' => 'No Matching Tokens',
      'Auth Provider' => 'Auth Provider',
      'Upgrading partial session of user with no session!' => 'Upgrading partial session of user with no session!',
      '%s Account' => '%s Account',
      'NOTE: **To complete setup**, copy and paste these keys into JIRA according to the instructions below.' => 'NOTE: **To complete setup**, copy and paste these keys into JIRA according to the instructions below.',
      'JIRA Base URI' => 'JIRA Base URI',
      'A session is visible only to its owner.' => 'A session is visible only to its owner.',
      'OAuth2 Account' => 'OAuth2 Account',
      'LDAP Hostname' => 'LDAP Hostname',
      'The email address you just clicked a link from is already verified and associated with a registered account (%s). Log in to continue.' => 'The email address you just clicked a link from is already verified and associated with a registered account (%s). Log in to continue.',
      '%s enabled this provider.' => '%s enabled this provider.',
      'After entering the key, the application should display a numeric code. Enter that code below to confirm that you have configured the authenticator correctly:' => 'After entering the key, the application should display a numeric code. Enter that code below to confirm that you have configured the authenticator correctly:',
      'Specify either specific users with %s, or all users with %s, but not both.' => 'Specify either specific users with %s, or all users with %s, but not both.',
      'When you are ready, %s.' => 'When you are ready, %s.',
      'Unable to refresh token!' => 'Unable to refresh token!',
      'Consumer Key' => 'Consumer Key',
      'You must select a valid provider.' => 'You must select a valid provider.',
      'Logging in will verify %s as an email address you own.' => 'Logging in will verify %s as an email address you own.',
      'Not a Valid Email Address' => 'Not a Valid Email Address',
      'SSH Keys' => 'SSH Keys',
      'Active OAuth Token (Expires: %s)' => 'Active OAuth Token (Expires: %s)',
      'Specify the credential type to revoke with "--type" or "--everything", but not both.' => 'Specify the credential type to revoke with "--type" or "--everything", but not both.',
      '(If given an option, select that this key is "Time Based", not "Counter Based".)' => '(If given an option, select that this key is "Time Based", not "Counter Based".)',
      'Multiple password hashers of different strengths are not available, so hash upgrading can not be tested.' => 'Multiple password hashers of different strengths are not available, so hash upgrading can not be tested.',
      'Expected email address reassignment (%s).' => 'Expected email address reassignment (%s).',
      'These methods are recently introduced and subject to change.' => 'These methods are recently introduced and subject to change.',
      'LDAP Password: ' => 'LDAP Password: ',
      'Bad Invite Code' => 'Bad Invite Code',
      'Refreshing account #%d (%s/%s).' => 'Refreshing account #%s (%s/%s).',
      'Allow users to log in or register using a username and password.' => 'Allow users to log in or register using a username and password.',
      'WordPress.com' => 'WordPress.com',
      'Refresh %s Account' => 'Refresh %s Account',
      'Login cookie was set correctly, but your login session is not valid. Try clearing cookies and logging in again.' => 'Login cookie was set correctly, but your login session is not valid. Try clearing cookies and logging in again.',
      'Password Hash Algorithms' => 'Password Hash Algorithms',
      'OAuth1 Handshake Secret' => 'OAuth1 Handshake Secret',
      'Login Failed' => 'Login Failed',
      'You have failed to verify multi-factor authentication too often in a short period of time.' => 'You have failed to verify multi-factor authentication too often in a short period of time.',
      'Use TLS' => 'Use TLS',
      'Auth Invite' => 'Auth Invite',
      'Username/Password' => 'Username/Password',
      'Configure a connection to an LDAP server so that users can use their LDAP credentials to log in to Phabricator.' => 'Configure a connection to an LDAP server so that users can use their LDAP credentials to log in to Phabricator.',
      'Email Address Already in Use' => 'Email Address Already in Use',
      'Administrative approvals are enabled (in %s), so all new users must have their accounts approved by an administrator.' => 'Administrative approvals are enabled (in %s), so all new users must have their accounts approved by an administrator.',
      'Already Associated' => 'Already Associated',
      'Forgot Password' => 'Forgot Password',
      'Realname Attributes' => 'Realname Attributes',
      'Specify %s to reset all action counters.' => 'Specify %s to reset all action counters.',
      '= Integration Options = 
    Configure how to record Revisions on JIRA tasks.
    Note you\'ll have to restart the daemons for this to take effect.' => '= Integration Options = 
    Configure how to record Revisions on JIRA tasks.
    Note you\'ll have to restart the daemons for this to take effect.',
      '[Phabricator] %s has invited you to join Phabricator' => '[Phabricator] %s has invited you to join Phabricator',
      'No valid linkable account.' => 'No valid linkable account.',
      'There are no configured default registration providers.' => 'There are no configured default registration providers.',
      'The authentication provider did not return the correct client state parameter in its response. If this problem persists, you may need to clear your cookies.' => 'The authentication provider did not return the correct client state parameter in its response. If this problem persists, you may need to clear your cookies.',
      'SSH keys can not be reactivated.' => 'SSH keys can not be reactivated.',
      'Again' => 'Again',
      '%s disabled account unlinking.' => '%s disabled account unlinking.',
      'Revoke Tokens?' => 'Revoke Tokens?',
      'Confirm %s Account Link' => 'Confirm %s Account Link',
      'Provider Already Configured' => 'Provider Already Configured',
      'Missing Client ID Cookie' => 'Missing Client ID Cookie',
      'To search for an LDAP record before authenticating, either check the **Always Search** checkbox or enter an anonymous username and password to use to perform the search.' => 'To search for an LDAP record before authenticating, either check the **Always Search** checkbox or enter an anonymous username and password to use to perform the search.',
      'Installation is complete. Register your administrator account below to log in. You will be able to configure options and add other authentication mechanisms (like LDAP or OAuth) later on.' => 'Installation is complete. Register your administrator account below to log in. You will be able to configure options and add other authentication mechanisms (like LDAP or OAuth) later on.',
      'Skipping, provider is not an OAuth2 provider.' => 'Skipping, provider is not an OAuth2 provider.',
      'Your login session is invalid, and clearing the session cookie was unsuccessful. Try clearing your browser cookies.' => 'Your login session is invalid, and clearing the session cookie was unsuccessful. Try clearing your browser cookies.',
      'OAuth Consumer Secret' => 'OAuth Consumer Secret',
      'All Providers' => 'All Providers',
      'The password you entered has been revoked. You can not reuse a password which has been revoked. Choose a new password.' => 'The password you entered has been revoked. You can not reuse a password which has been revoked. Choose a new password.',
    );
  }

}
