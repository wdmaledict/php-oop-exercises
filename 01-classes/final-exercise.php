<?php

// Has: title, exercises
class WorkoutPlan
{
    public function addExercise()
    {
        // $workoutPlan->addExercise()
    }

    public function removeExercise()
    {
        // $workoutPlan->removeExercise()
    }
}

// Has: name, targetMuscles
class Exercise
{
    public function replaceWith()
    {
        // $exercise->replaceWith()
    }

    public function skip()
    {
        // $exercise->skip()
    }
}

// Has: workoutPlan, status, sets
class TrainingSession
{
    public function start()
    {
        // $trainingSession->start()
    }

    public function logSet()
    {
        // $trainingSession->logSet()
    }
}

// Has: currentStatus
class TrainingStatus
{
    public function isScheduled()
    {
        // $trainingStatus->isScheduled()
    }

    public function isPaused()
    {
        // $trainingStatus->isPaused()
    }
}

// Has: name, icon
class AchievementBadge
{
    public function unlock()
    {
        // $achievementBadge->unlock()
    }

    public function share()
    {
        // $achievementBadge->share()
    }
}

