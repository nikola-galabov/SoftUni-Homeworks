using System;

class DivideBy7And5
{
    static void Main()
    {
        Console.Write("Please enter a number: ");
        int num = int.Parse(Console.ReadLine());
        bool divided=false;
        if ((num%7==0)&&(num%5==0))
        {
           divided = true;
        }
        Console.WriteLine("Divided by 7 and 5? {0}",divided);
    }
}

