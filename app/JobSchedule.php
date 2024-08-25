<?php

namespace App;

enum JobSchedule : string
{
        //
    case FullTime = 'Full-Time';
    case PartTime = 'Part-Time';
    case Remote = 'Remote';
    case Internship = 'Internship';
    case Freelance = 'Freelance';
    case Temporary = 'Temporary';
    case Contract = 'Contract';
    case OnCall = 'On-Call';
    case Volunteer = 'Volunteer';
    case Seasonal = 'Seasonal';
    case Permanent = 'Permanent';
    case Apprenticeship = 'Apprenticeship';
}
