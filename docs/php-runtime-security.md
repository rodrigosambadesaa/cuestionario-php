# PHP runtime security

CVE-2026-128064 (19 November 2026) affects native PHP HTTP and FTP stream wrappers. Use PHP 8.2.36, 8.3.37, 8.4.28, 8.5.13 or a later supported, patched release; vendor-confirmed backports are also acceptable. This educational repository does not pin the interpreter, so upgrade your local PHP/XAMPP or web hosting separately. Verify the actual CLI and web SAPI version, restart services, and test the exercises. Composer updates alone do not fix this flaw. Keep TLS certificate verification enabled and avoid automatic redirects in sensitive outbound stream requests until patched.

Official advisory: https://github.com/php/php-src/security/advisories/GHSA-f6gg-rchx-xw8j
