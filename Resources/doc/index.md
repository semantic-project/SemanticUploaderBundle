Getting started with SemanticUploaderBundle
=======================================

SemanticUploaderBundle provides an easy way to link file uploads with a persistence
layer.




## Installation

Add SemanticUploaderBundle by running this command from the terminal at the root of
your Symfony project:

```bash
composer require vich/uploader-bundle=dev-master
```

## Enable the bundle

To start using the bundle, register the bundle in your application's kernel class:

```php
// app/AppKernel.php
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            // ...
            new Semantic\UploaderBundle\SemanticUploaderBundle(),
            // ...
        ];
    }
}
```
## Choose and configure

Once the chosen persistence engine is installed and configured, tell
SemanticUploaderBundle that you want to use it.

```yaml
# app/config/config.yml
semantic_uploader:
    upload_destination: "%kernel.project_dir%/web/assets/images"
```

## That was it!

Yea, the bundle is installed! Move onto the [usage section] to find out how
to configure and setup your first upload.

## Usage



