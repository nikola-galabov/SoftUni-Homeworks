using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _14_BinaryToDec
{
    class Program
    {
        static void Main(string[] args)
        {
            long input = long.Parse(Console.ReadLine());
            int reminder;
            long number = input;
            string result = string.Empty;
            while (number>0)
            {
                if (number%2==0)
                {
                    result += "0";
                }
                else
                {
                    result += "1";
                }
                number = number / 2;
            }

            char[] cArray = result.ToCharArray();
            string reverse = String.Empty;
            for (int i = cArray.Length - 1; i > -1; i--)
            {
                reverse += cArray[i];
            }
            Console.WriteLine(reverse);
            
        }
    }
}
