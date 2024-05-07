<?php
// Exercise 7**
// Imagine you own a gun store. Only certain guns can be purchased with license types. Create an object (person) that will be the requester to purchase a gun (object) Person object has a name, valid licenses (multiple) & cash. Guns are objects stored within an array. Each gun has license letter, price & name. Using PHP in-built functions determine if the requester (person) can buy a gun from the store.
function buyFirearm($person, $firearm)
{
    if (in_array($firearm["license"], $person["licenses"]) && $person["cash"] >= $firearm["price"]) {
        return true;
    }
    return false;
}


$guns = [
    ["name" => "Pistol", "license" => "A", "price" => 500],
    ["name" => "Carbine", "license" => "B", "price" => 1500],
    ["name" => "Rifle", "license" => "B", "price" => 2200],
    ["name" => "Shotgun", "license" => "c", "price" => 2000]
];


$person = [
    "name" => "John",
    "licenses" => ["A", "B"],
    "cash" => 2000
];

foreach ($guns as $firearm) {
    if (buyFirearm($person, $firearm) === true) {
        echo $person["name"] . " can buy a " . $firearm["name"] . ".\n";
    } else {
        echo $person["name"] . " cannot buy a " . $firearm["name"] . ".\n";
    }
}