# USAVEME Developer Portal

Official developer resources for [USAVEME](https://usaveme.com) and the $USAVE Solana ecosystem.

## Status

This repository is an initial developer portal implementation. Documentation and examples are informational; **no public USAVEME API, RPC endpoint, webhook, SDK, or production contract is represented as live** unless independently verified and explicitly marked as available.

## Website integration

The `wordpress/usaveme-developers.php` plugin registers a `[usaveme_developers]` shortcode. Activate the plugin in WordPress and add the shortcode to the `/developers` page. The shortcode provides a responsive developer hub with links to the documentation and repository. It does not modify token contracts, custody, liquidity, payments, or existing WordPress accounts.

## Documentation

- [Getting started](docs/getting-started.md)
- [Token integration](docs/token-integration.md)
- [API roadmap](docs/api-roadmap.md)
- [Security](docs/security.md)
- [Deployment](docs/deployment.md)
- [Contributing](CONTRIBUTING.md)

## Verification

Never rely on a token symbol alone to identify an asset. Verify the official mint address using multiple official project channels and a Solana explorer. Never enter a wallet seed phrase into a website, plugin, or support form.

## Important distinction

Purchasing or holding $USAVE is **not a charitable donation or direct sponsorship**. The token is intended to support the development and operations of the USAVEME platform, which seeks to connect sponsors directly with children in need. Direct sponsorship is a separate activity.
