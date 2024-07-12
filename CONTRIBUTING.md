# Contributing

## Installing

- `brew install openssl`
- `brew install openssl@1.1`
- `brew install libgd`
- [`brew install gmp libsodium imagemagick`](https://github.com/asdf-community/asdf-php?tab=readme-ov-file#macos)
- [`brew install libiconv re2c bison pkg-config`](https://github.com/asdf-community/asdf-php/issues/164#issuecomment-1930398294)
- [`brew install argon2 aspell libunistring libidn2 libnghttp2 openldap rtmpdump curl unixodbc freetds jpeg-turbo libavif gd krb5 libpq libzip tidy-html5 re2c libiconv pkg-config`](https://github.com/asdf-community/asdf-php/issues/164#issuecomment-2126486644)
- [`brew install openssl@1.1`](https://github.com/asdf-community/asdf-php/issues/163#issuecomment-1935891611)

- Follow the [instructions](https://github.com/asdf-community/asdf-php/issues/164#issuecomment-2126486644) to add variables to path
- Follow the [instructions](https://github.com/asdf-community/asdf-php/issues/163#issuecomment-1935891611) for compiling with `openssl@1.1`

- `asdf install php 8.3.8`

- VS Code extensions
  - `bmewburn.vscode-intelephense-client`

## Updating

- [Update dependencies](https://stackoverflow.com/a/73543352)
- `composer install` or `composer update`
- `composer dumpautoload`
- `composer validate`

- `git add -A`
- `git commit -m "message"`
- `git push`
- `git tag v0.0.1`
- `git push origin v0.0.1`

- `curl -XPOST -H'content-type:application/json' 'https://packagist.org/api/update-package?username=bunny-launcher&apiToken=API_TOKEN' -d'{"repository":{"url":"https://packagist.org/packages/bunny-launcher/bunny-sdk"}}'`
