class BankKonto():
    def __init__(self, saldo):
        self._saldo = saldo
        
    def satt_in(self, amount):
        if amount > 0:
            self._saldo += amount
            
    def ta_ut(self, amount):
        if 0 < amount <= self._saldo:
            self._saldo -= amount
            

class Fordon:
    def kora(self):
        print("Fordonet kör")
    
class Bil(Fordon):
    def kora(self):
        print("Bilen kör")
        
class Glass:
    def smak(self): # 
        pass
    
class Vanilj(Glass):
    def smak(self):
        print("Vanilj smak")
        
class Choklad(Glass):
    def smak(self):
        print("Choklad smak")

list = [Vanilj(), Choklad()]

for i in list:
    i.smak()
    
class Produkt:
    def __init__(self, pris):
        self._pris = 0
        self.pris = pris
        
    @property
    def pris(self):
        return self._pris
    
    @pris.setter
    def pris(self, value):
        if value >= 0:
            self._pris = value

p = Produkt(10)

print(p.pris)

p.pris = 50
print(p.pris)

class Anstalld:
    def __init__(self, namn):
        self.namn = namn
    
    def beskrivning(self):
        print("Anställd nånstans")

class Rektor(Anstalld):
    def beskrivning(self):
        print(f"{self.namn} är en rektor på en skola")
        
class Larare(Anstalld):
    def beskrivning(self):
        print(f"{self.namn} är en lärare på en skola")
        
r = Rektor("Mellisa")
r.beskrivning()

l = Larare("Karin")
l.beskrivning()


class Spelkaraktar:
    def attack(self): #
        pass 
    
class Krigare(Spelkaraktar):
    def attack(self):
        print("Krigaren slår med sitt svärd")
        
class Trollkar(Spelkaraktar):
    def attack(self):
        print("Trollkaren kastar eld på dig")
        
karaktarern = [Krigare(), Trollkar()]

for k in karaktarern:
    k.attack()