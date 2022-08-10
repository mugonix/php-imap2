<div align="center">

![PHP IMAP2](docs/logo.png)

# PHP IMAP2

[![Linter](https://github.com/javanile/php-imap2/actions/workflows/linter.yml/badge.svg)](https://github.com/javanile/php-imap2/actions/workflows/linter.yml)

</div>

```php
$mbh = imap2_open($server, $username, $token, OP_XOAUTH2);
if (! $mbh) {
    error_log(imap2_last_error());
    throw new \RuntimeException('Unable to open the INBOX');
}
```


## Gmail OAuth2

Scope: https://mail.google.com/


## Sandbox

- Demo #1 - <https://phpsandbox.io/e/x/zwauf>

## Other links 

- <https://php.libhunt.com/php-imap2-alternatives>

## Reference

- <https://www.atmail.com/blog/imap-commands/>
- <https://developers.google.com/gmail/imap/xoauth2-protocol>
- <https://github.com/ddeboer/imap/issues/443#issuecomment-1172158902>
