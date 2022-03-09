<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Radar extends Model
{
    protected $table="radars";
    protected $fillable=['station_name','location','photo','supply_date','installation','operation_date','delivery'];
    protected $hidden=['status_of_tower','LetterDate','Remarks', 'created_at', 'updated_at'];
    public $timestamps=false;

    /**
     * Get the relationships for the entity.
     *
     * @return array
     */
    public function getQueueableRelations()
    {
        // TODO: Implement getQueueableRelations() method.
    }

    /**
     * Get the connection of the entity.
     *
     * @return string|null
     */
    public function getQueueableConnection()
    {
        // TODO: Implement getQueueableConnection() method.
    }

    /**
     * Retrieve the model for a bound value.
     *
     * @param mixed $value
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function resolveRouteBinding($value)
    {
        // TODO: Implement resolveRouteBinding() method.
    }
}
