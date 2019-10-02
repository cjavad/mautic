<?php
/*
 * @copyright   2019 Mautic, Inc. All rights reserved
 * @author      Mautic, Inc.
 *
 * @link        https://mautic.com
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\IntegrationsBundle\Sync\DAO\Value;

class ReferenceValueDAO
{
    /**
     * @var int
     */
    private $value;

    /**
     * @var string
     */
    private $type;

    /**
     * @return int|null
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * @param int
     */
    public function setValue(int $value): void
    {
        $this->value = $value;
    }
    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function __toString(): string
    {
        return (string) $this->value;
    }
}
