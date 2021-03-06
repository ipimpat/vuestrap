<?php

namespace Ipimpat\Vuestrap\Tests;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Application;
use Ipimpat\Vuestrap\VuestrapServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected $filesystem;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        // additional setup

        $this->filesystem = new Filesystem();
    }

    /**
     * Clean up the testing environment before the next test.
     *
     * @return void
     */
    protected function tearDown(): void
    {
        parent::tearDown();
        $this->cleanResourceDirectory($this->filesystem);
        $this->cleanInertiaFiles($this->filesystem);
    }

    /**
     * Get package providers.
     *
     * @param  Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            VuestrapServiceProvider::class,
        ];
    }

    /**
     * Define environment setup.
     *
     * @param  Application   $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }

    /**
     * Remove files generated by Vuestrap
     *
     * @param Filesystem $filesystem
     * @return void
     */
    protected function cleanResourceDirectory(Filesystem $filesystem)
    {
        $this->filesystem->delete(resource_path('sass/app.scss'));
    }

    /**
     * Remove files and directory generated for inertia stack
     *
     * @param Filesystem $filesystem
     * @return void
     */
    protected function cleanInertiaFiles(Filesystem $filesystem)
    {
        // make sure we're starting from a clean state
        $this->filesystem->delete(resource_path('js/app.js'));
        $this->filesystem->deleteDirectory(resource_path('js/BootstrapVue'));
        $this->filesystem->delete(resource_path('js/Jetstream/Button.vue'));
        $this->filesystem->delete(resource_path('js/Jetstream/Checkbox.vue'));
        $this->filesystem->delete(resource_path('js/Jetstream/ConfirmationModal.vue'));
        $this->filesystem->delete(resource_path('js/Jetstream/ConfirmsPassword.vue'));
        $this->filesystem->delete(resource_path('js/Jetstream/DangerButton.vue'));
        $this->filesystem->delete(resource_path('js/Jetstream/DialogModal.vue'));
        $this->filesystem->delete(resource_path('js/Jetstream/DropdownHeader.vue'));
        $this->filesystem->delete(resource_path('js/Jetstream/DropdownLink.vue'));
        $this->filesystem->delete(resource_path('js/Jetstream/Dropdown.vue'));
        $this->filesystem->delete(resource_path('js/Jetstream/InputError.vue'));
        $this->filesystem->delete(resource_path('js/Jetstream/Input.vue'));
        $this->filesystem->delete(resource_path('js/Jetstream/NavLink.vue'));
        $this->filesystem->delete(resource_path('js/Jetstream/ResponsiveNavLink.vue'));
        $this->filesystem->delete(resource_path('js/Jetstream/SecondaryButton.vue'));
        $this->filesystem->delete(resource_path('js/Jetstream/ValidationErrors.vue'));
        $this->filesystem->delete(resource_path('js/Layouts/AppLayout.vue'));
        $this->filesystem->delete(resource_path('js/Pages/API/ApiTokenManager.vue'));
        $this->filesystem->delete(resource_path('js/Pages/Auth/Login.vue'));
        $this->filesystem->delete(resource_path('js/Pages/Profile/DeleteUserForm.vue'));
        $this->filesystem->delete(resource_path('js/Pages/Profile/LogoutOtherBrowserSessionsForm.vue'));
        $this->filesystem->delete(resource_path('js/Pages/Profile/TwoFactorAuthenticationForm.vue'));
    }

    /**
     * Basic tests shared across all methods
     *
     * @return void
     */
    protected function basicTests()
    {
        $this->assertTrue($this->filesystem->exists(resource_path('sass/app.scss')));
    }

    /**
     * Basic tests shared across all inertia test methods
     *
     * @return void
     */
    protected function basicInertiaTests()
    {
        $this->assertTrue($this->filesystem->exists(resource_path('js/app.js')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/BootstrapVue/RouterLink.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Jetstream/Button.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Jetstream/Checkbox.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Jetstream/ConfirmationModal.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Jetstream/ConfirmsPassword.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Jetstream/DangerButton.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Jetstream/DialogModal.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Jetstream/DropdownHeader.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Jetstream/DropdownLink.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Jetstream/Dropdown.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Jetstream/InputError.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Jetstream/Input.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Jetstream/NavLink.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Jetstream/ResponsiveNavLink.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Jetstream/SecondaryButton.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Jetstream/ValidationErrors.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Layouts/AppLayout.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Pages/API/ApiTokenManager.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Pages/Auth/Login.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Pages/Profile/DeleteUserForm.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Pages/Profile/LogoutOtherBrowserSessionsForm.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Pages/Profile/TwoFactorAuthenticationForm.vue')));
    }

    /**
     * Test for inertia team assets
     *
     * @return void
     */
    protected function inertiaTeamTests()
    {
        $this->assertTrue($this->filesystem->exists(resource_path('js/Pages/Teams/DeleteTeamForm.vue')));
        $this->assertTrue($this->filesystem->exists(resource_path('js/Pages/Teams/TeamMemberManager.vue')));
    }
}