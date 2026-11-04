# $USAVE Solana integration

$USAVE is the token symbol associated with the USAVEME project. Token purchases are not donations or direct sponsorship payments.

## Mint address

**Verification required:** This repository intentionally does not hard-code an unverified mint address. Obtain the current official Solana mint from the project's authoritative channels and verify it on a trusted Solana explorer before using it in production.

## Read-only token inspection

Using `@solana/web3.js`, connect to a trusted Solana RPC provider and inspect the verified mint account. Never assume a token is authentic based on ticker or logo. For token supply, decimals, mint authority, and freeze authority, use the appropriate SPL Token / Token-2022 program parser for the mint's owner program.

## Liquidity and locks

Liquidity pool creation, LP token burns, and Burn & Earn fee rights are distinct operations. Verify the **specific pool address**, pool program, LP mint, and relevant on-chain burn/lock transactions independently. A burned LP position may still have fee-claim rights; do not describe liquidity as locked without checking the actual transaction and position.

## Production checklist

- Confirm mint address and token program.
- Confirm supply and mint authority on chain.
- Confirm pool address and quote token mint.
- Validate the RPC network (mainnet-beta versus devnet).
- Display balances using on-chain decimals.
- Handle RPC errors, retries, and rate limits.
- Never request private keys or seed phrases.

No token swaps or wallet transaction signing are implemented by this repository.
