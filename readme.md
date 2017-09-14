# Optimize Catalog images with Magento2

Based on [Spatie Image Optimizer](https://github.com/spatie/image-optimizer).

This package adds 2 new Image Adapters to Magento2 in Store -> Configuration -> Advanced -> Developer -> Image Processing:
 - GD2 + Optimizer
 - ImageMagick + Optimizer
 
By using either of those instead of the default, the images will be automatically optimized.

> Note: This is an alpha package, use with caution.

## Installation

You can install this module via composer:

```bash
composer require fruitcake/magento2-image-optimizer:"0.1.x@dev"
```

Enable the module (and reset cache/di etc)

```bash
php bin/magento module:enable Fruitcake_ImageOptimizer
```

You can now select and Image Adapter that includes the Optimizer.

Before images can be optimized, you will need to install the Optimizers as described in https://github.com/spatie/image-optimizer#optimization-tools

## Usage

When you upload new images, they will be processed using the Adapter. If you want to make any changes, you can delete your cache and re-generate the thumbnails

```bash
php bin/magento catalog:images:resize
```

## Todo

 - [ ] Process WYSIWYG images
 - [ ] Command to re-generate existing images or process directories
 
## Security

If you discover any security related issues, please email barry@fruitcake.nl directly.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
