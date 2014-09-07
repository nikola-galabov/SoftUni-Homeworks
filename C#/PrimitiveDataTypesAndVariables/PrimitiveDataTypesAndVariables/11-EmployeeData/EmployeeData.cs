using System;

class EmployeeData
{
    static void Main()
    {
        Console.Write("Please enter the first name: ");
        string firstName = Console.ReadLine();
        Console.Write("Please enter the last name: ");
        string lastName = Console.ReadLine();
        Console.Write("Please enter the age: ");
        byte age = byte.Parse(Console.ReadLine());
        Console.Write("Please enter the gender(m/f): ");
        char Gender = char.Parse(Console.ReadLine());
        Console.Write("Please enter the personal ID: ");
        long persID = long.Parse(Console.ReadLine());
        Console.Write("Please enter the unique number: ");
        uint uniqueNumber = uint.Parse(Console.ReadLine());
        Console.WriteLine(firstName);
        Console.WriteLine(lastName);
        Console.WriteLine(age);
        Console.WriteLine(Gender);
        Console.WriteLine(persID);
        Console.WriteLine(uniqueNumber);
    }
}

