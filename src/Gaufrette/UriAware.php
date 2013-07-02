<?php

namespace Gaufrette;

/**
 * Interface for files that know their URI in internet
 * Useful e.g. for certain types of CDN that return the file uri immediately when new file is added
 *
 * @author Tomi Saarinen <tomi.saarinen@rohea.com>
 */
interface UriAware
{
    /**
     * @param string $key The key of the resource
     *
     * @return string uri
     */
    public function getUri($key);

}