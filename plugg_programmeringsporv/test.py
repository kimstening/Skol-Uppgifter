# 1 Inkapsling
# a) Data skyddas genom klasser. Man styr åtkomst via metoder/properties. Interna detaljer göms.
# Arv
# b) En klass kan ärva egenskaper och metoder från en annan klass. Subklassen får metoder/attribut från basklassen.
# Polymorfism
# c) Samma metodnamn men har olika beteende beroende på objektets typ.

# 2
# Varför är inkapsling viktigt i objektorienterad programmering? Ge två olika anledningar.
# Skyddar data från felaktiga värden.
# Gör koden säkrare även gör det enklare att ändra saker i klassen utan att resten påverkas.

# 3
# Beskriv med ord vad som händer när:
# · en metod skrivs i en basklass
# · och sedan skrivs om (överskuggas) i en subklass
# Hur hänger detta ihop med polymorfism?
# Subklassen skriver är basklassen metod och när metoden anropas används subklassens version.

# 4
class Person:
    def __init__(self, namn, alder):
        self._namn = namn
        self._alder = alder

    @property
    def alder(self):
        return self._alder

    @alder.setter
    def alder(self, value):
        if value >= 0:
            self._alder = value

# a) Vad är syftet med att använda _alder istället för alder? 
# _alder markerar internt attribut som inte kan ändras direkt utifrån.
# b) Vad händer om man försöker sätta p.alder = -5?
# Inget händer
# c) Ge en fördel med att använda property i detta exempel. 
# Validering, bätter kontroll, ser ut som en vanlig attribut

# 5 