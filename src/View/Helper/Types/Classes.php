<?php
declare(strict_types=1);

namespace BootstrapUI\View\Helper\Types;

/**
 * Classes
 *
 * All available bootstrap classes
 */
final class Classes extends Type
{
    /** @var string The default class */
    public const DEFAULT = 'default';
    /** @var string The primary class */
    public const PRIMARY = 'primary';
    /** @var string The success class */
    public const SUCCESS = 'success';
    /** @var string The info class */
    public const INFO = 'info';
    /** @var string The warning class */
    public const WARNING = 'warning';
    /** @var string The danger class */
    public const DANGER = 'danger';
    /** @var string The link class */
    public const LINK = 'link';
    /** @var string The extra small class */
    public const XS = 'xs';
    /** @var string The small class */
    public const SM = 'sm';
    /** @var string The large class */
    public const LG = 'lg';
}
