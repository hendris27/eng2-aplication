<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ProblemFCT;

class ProblemFCTPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, ProblemFCT $problemFct): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, ProblemFCT $problemFct): bool
    {
        return true;
    }

    public function delete(User $user, ProblemFCT $problemFct): bool
    {
        return true;
    }

    public function restore(User $user, ProblemFCT $problemFct): bool
    {
        return true;
    }

    public function forceDelete(User $user, ProblemFCT $problemFct): bool
    {
        return true;
    }
}