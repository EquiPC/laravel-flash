<?php

namespace EquiPC\Flash;

use Illuminate\Session\Store;

class FlashNotifier
{
    /**
     * The session store.
     *
     * @var Store
     */
    private $session;

    /**
     * Create a FlashNotifier instance.
     *
     * @param Store $session
     */
    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Flash an information message.
     *
     * @param string $message
     * @return $this
     */
    public function info($message)
    {
        $this->message($message, 'info');
    }

    /**
     * Flash a success message.
     *
     * @param string $message
     * @return $this
     */
    public function success($message)
    {
        $this->message($message, 'success');
    }

    /**
     * Flash an error message.
     *
     * @param string $message
     * @return $this
     */
    public function error($message)
    {
        $this->message($message, 'error');
    }

    /**
     * Flash a warning message.
     *
     * @param string $message
     * @return $this
     */
    public function warning($message)
    {
        $this->message($message, 'warning');
    }

    /**
     * Flash a general message.
     *
     * @param string $message
     * @return $this
     */
    public function message($message, $level = '')
    {
        $this->session->flash('flash.message', $message);
        $this->session->flash('flash.level', $level);
    }
}
