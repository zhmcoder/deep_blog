<?php

namespace Andruby\DeepBlog\Commands;

use Andruby\DeepBlog\BlogServiceProvider;
use Illuminate\Console\Command;
use BinaryTorch\LaRecipe\LaRecipeServiceProvider;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deep_blog:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install deep docs and publish the required assets and configurations.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->line('Publishing assets and configurations.. 🍪');
        $this->call('vendor:publish', ['--provider' => \Andruby\DeepAdmin\AdminServiceProvider::class]);

        $this->call('vendor:publish', ['--provider' => LaRecipeServiceProvider::class, '--tag' => ['larecipe_assets', 'larecipe_config', 'larecipe_views']]);

        $this->call('vendor:publish', ['--provider' => BlogServiceProvider::class]);

//        $this->call('vendor:publish', ['--provider' => DocsServiceProvider::class,
//            '--tag' => ['deep-docs-views'], '--force' => 'true']);

        $this->info('DeepBlog successfully installed! Enjoy 😍');
        $this->info('Visit http://host and http://host/' . config('admin.route.prefix') . ' in your browser 👻');
    }

    /**
     * Get the composer command for the environment.
     *
     * @return string
     */
    protected function findComposer()
    {
        if (file_exists(getcwd() . '/composer.phar')) {
            return '"' . PHP_BINARY . '" ' . getcwd() . '/composer.phar';
        }

        return 'composer';
    }
}
