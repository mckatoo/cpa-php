<?php

namespace Acme\Interfaces;

Interfaces Imodel{
    public function create($attributes);
    public function read();
    public function update($id, $attributes);
    public function delete($id, $value);
    public function fundBy($id, $value);
}

 ?>
