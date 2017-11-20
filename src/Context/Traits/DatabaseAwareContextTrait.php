<?php
namespace PaulGibbs\WordpressBehatExtension\Context\Traits;

/**
 * Provides driver agnostic logic (helper methods) relating to the database.
 */
trait DatabaseAwareContextTrait
{
    use BaseAwarenessTrait;

    /**
     * Export WordPress database.
     *
     * @param array $args
     *
     * @return string Path to the export file.
     */
    public function exportDatabase($args)
    {
        return $this->getDriver()->database->export(0, $args);
    }

    /**
     * Import WordPress database.
     *
     * @param array $args
     */
    public function importDatabase($args)
    {
        $this->getDriver()->database->import(0, $args);
    }
}