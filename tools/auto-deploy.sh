#!/bin/bash
# fail on errors
set -e

# Set iSC Inc. MediaWiki Extension URL
## MW_EXTENSION_URL=https://extensions.inc.isc/

# deploy only master builds
if [ "$TRAVIS_BRANCH" != "downloads" ] || [ "$TRAVIS_PULL_REQUEST" != "false" ]; then
  echo "Skip deploy."
  exit 0
fi
