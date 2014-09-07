using System;

class GravitationOnTheMoon
{
    static void Main()
    {
        Console.Write("Please enter your weight: ");
        double weight = double.Parse(Console.ReadLine());
        double weightOnMoon = weight * 0.17;
        Console.WriteLine("Your weight in the Moon will be: {0}",weightOnMoon);
    }
}

