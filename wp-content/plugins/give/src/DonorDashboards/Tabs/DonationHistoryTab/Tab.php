<?php

namespace Give\DonorDashboards\Tabs\DonationHistoryTab;

use Give\DonorDashboards\Tabs\Contracts\Tab as TabAbstract;

class Tab extends TabAbstract
{

    public static function id()
    {
        return 'donation-history';
    }

    public function routes()
    {
        return [
            DonationsRoute::class,
        ];
    }
}
