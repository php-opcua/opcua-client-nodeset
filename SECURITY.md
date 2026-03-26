# Security Policy

## Supported Versions

| Version | Supported |
|---------|-----------|
| 4.x     | Yes       |
| 3.x     | No        |
| 2.x     | No        |
| 1.x     | No        |

## Reporting a Vulnerability

If you discover a security vulnerability in this package, please report it responsibly.

**Do not open a public issue.** Instead, send an email to [gianfri.aur@gmail.com](mailto:gianfri.aur@gmail.com) with:

- A description of the vulnerability
- Steps to reproduce
- The affected version(s)
- Any potential impact assessment

You should receive an acknowledgment within 48 hours. From there, we'll work together to understand the scope and develop a fix before any public disclosure.

## Scope

This policy covers the `php-opcua/opcua-client-nodeset` package. Since this is a generated code library, vulnerabilities are most likely to originate in the generator itself. For vulnerabilities in dependencies or related packages, please report them to the respective maintainers:

- [opcua-client](https://github.com/php-opcua/opcua-client) — the OPC UA client library
- [opcua-cli](https://github.com/php-opcua/opcua-cli) — the CLI tool and code generator
- [opcua-session-manager](https://github.com/php-opcua/opcua-session-manager)
- [laravel-opcua](https://github.com/php-opcua/laravel-opcua)
- [opcua-test-suite](https://github.com/php-opcua/opcua-test-suite)

## Security Considerations

This package contains generated type definitions, enums, and codecs — it does not handle network communication or security directly. For OPC UA security best practices (security policies, encryption modes, certificate management), refer to the [`opcua-client` security documentation](https://github.com/php-opcua/opcua-client/blob/main/SECURITY.md).
