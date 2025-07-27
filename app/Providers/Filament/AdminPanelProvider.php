<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Althinect\FilamentSpatieRolesPermissions\FilamentSpatieRolesPermissionsPlugin;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Spatie\Permission\Models\Role;
 
class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->brandLogo('/logoptq.png')
            ->brandLogoHeight('3rem')
            // ->brandLogoHeight('50%')
            ->colors([
              'primary' => '#1a7446',
              'secondary' => Color::hex('#f5b700'), // Gold yellow
                'danger' => Color::hex('#ff3d00'),
                'gray' => Color::hex('#9e9e9e'),
                'info' => Color::hex('#2196f3'),
                'success' => Color::hex('#4caf50'),
                'warning' => Color::hex('#ff9800'),
            ])
            ->font('Poppins, sans-serif') // Modern font
            ->sidebarCollapsibleOnDesktop() // Better UX
            ->topNavigation() // Optional: for modern look
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
                \Hasnayeen\Themes\Http\Middleware\SetTheme::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->navigationGroups([
                NavigationGroup::make()
                     ->label('Role Permission')
            ])
            ->navigationItems([
                NavigationItem::make('Role')
                    ->url('/admin/roles')
                    ->group('Role Permission')
                    ->visible(fn(): bool => auth()->user()->hasPermission("",Role::class)),
                NavigationItem::make('Permission')
                    ->url('/admin/permissions')
                    ->group('Role Permission')
                    ->visible(fn(): bool => auth()->user()->hasPermission("",Role::class))
                    
            ])
        ->plugins([
            FilamentSpatieRolesPermissionsPlugin::make(),
            \Hasnayeen\Themes\ThemesPlugin::make()
        ]);
    }
}
