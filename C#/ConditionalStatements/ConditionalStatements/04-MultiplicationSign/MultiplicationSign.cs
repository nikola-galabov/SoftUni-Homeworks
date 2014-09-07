using System;

class MultiplicationSign
{
    static void Main()
    {
        double a = double.Parse(Console.ReadLine());
        double b = double.Parse(Console.ReadLine());
        double c = double.Parse(Console.ReadLine());
        double[] abc = {a,b,c, };
        string sign = string.Empty;
        int signCounter = 0;
        
        if (a==0||b==0||c==0)
        {
            sign = "0";    
        }
        else if (a>0&&b>0&&c>0)
        {
            sign = "+";
        }
        else
        {
            for (int i = 0; i < abc.Length; i++)
            {
                if (abc[i] < 0)
                {
                    signCounter++;
                }
            }

            if (signCounter%2==0)
            {
                sign="+";
            }
            else
            {
                sign = "-";
            }
        }

        Console.WriteLine(sign);
        
        
    }
}

