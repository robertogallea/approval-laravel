<?php


namespace Afiqiqmal\Approval\Models\Traits;

trait HasApprovable
{
    public static function bootHasApprovable()
    {
    }

    public function canMakeApproval()
    {
        return true;
    }

    public function canMakeReject()
    {
        return true;
    }

    public function hasFullApprovalPermission()
    {
        return config('approval.enabled') && ($this->canMakeApproval() && $this->canMakeReject());
    }

    public function canMakeApprovalOrReject()
    {
        return config('approval.enabled') && ($this->canMakeApproval() || $this->canMakeReject());
    }
}
