using System;

class Program
{
    static void Main()
    {
        Console.Write("Please, enter your current age: ");
        int age =  int.Parse(Console.ReadLine());
        Console.WriteLine("After ten years your age will be: "+(age+10));
    }
}

