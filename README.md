
# Game Character Exercise

---

### **Step 1: Create the `Character` Class**  

**API Specification:**  
1. The class should have the following attributes:  
   - `name` (string)  
   - `health` (integer, default 100)  
   - `strength` (integer, default 10)  

2. The class must have a constructor to initialize these attributes.  

**Example Usage:**  
```php
$hero = new Character("Aragon");
echo $hero->name; // Outputs: Aragon
echo $hero->health; // Outputs: 100
echo $hero->strength; // Outputs: 10
```

---

### **Step 2: Add an Attack Method**  

**API Specification:**  
1. Create a method `attack` that takes another `Character` object as a parameter.  
2. When the method is called, reduce the other character's health by this character’s `strength`.  

**Example Usage:**  
```php
$hero = new Character("Aragon");
$villain = new Character("Orc", 80, 5);

$hero->attack($villain);
echo $villain->health; // Outputs: 70 (80 - 10)
```

---

### **Step 3: Introduce Leveling Up**  

**API Specification:**  
1. Add a method `levelUp` that increases the character's `strength` by 5 and their `health` by 20.  

**Example Usage:**  
```php
$hero = new Character("Aragon");
$hero->levelUp();

echo $hero->health; // Outputs: 120 (100 + 20)
echo $hero->strength; // Outputs: 15 (10 + 5)
```

---

### **Step 4: Add a Static Method for Combat Simulation**  

**API Specification:**  
1. Add a static method `simulateBattle` that takes two `Character` objects as parameters and lets them attack each other until one has `health <= 0`.  
2. Return the name of the winner.  

**Example Usage:**  
```php
$hero = new Character("Aragon", 100, 12);
$villain = new Character("Orc", 80, 8);

echo Character::simulateBattle($hero, $villain); 
// Outputs: Aragon (if Aragon wins the battle)
```

---

### **Step 5: Extend the `Character` Class**  

**API Specification:**  
1. Create a subclass `Mage` that adds a `mana` attribute (default 50).  
2. Add a method `castSpell` that reduces `mana` by 10 and deals damage equal to double the `strength` to the opponent.  

**Example Usage:**  
```php
$mage = new Mage("Gandalf");
$villain = new Character("Orc", 80, 8);

$mage->castSpell($villain);
echo $mage->mana; // Outputs: 40 (50 - 10)
echo $villain->health; // Outputs: 60 (80 - 20)
```

---

### **Step 6: Bonus Challenge**  

Add a `toString` magic method to both `Character` and `Mage` classes to provide a detailed description when printing the object.  

**Example Usage:**  
```php
$hero = new Character("Aragon");
echo $hero;
// Outputs: "Character: Aragon, Health: 100, Strength: 10"

$mage = new Mage("Gandalf");
echo $mage;
// Outputs: "Mage: Gandalf, Health: 100, Strength: 10, Mana: 50"
```

---

This setup ensures the student builds the classes themselves and gets creative while adhering to the provided API!
