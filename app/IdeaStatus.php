<?php

namespace App;

enum IdeaStatus: string
{
    case PENDING = 'pending';
    case IN_PROGRESS = 'in_Progress';
    case COMPLETED = 'completed';

    public function label()
    {

        return match ($this) {
            self::PENDING => 'Pending',
            self::IN_PROGRESS => 'In progress',
            self::COMPLETED => 'Completed',
        };
    }
}
