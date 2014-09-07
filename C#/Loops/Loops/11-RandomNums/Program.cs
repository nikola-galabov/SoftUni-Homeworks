using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _11_RandomNums
{
    class Program
    {
        static void Main(string[] args)
        {
            int n = int.Parse(Console.ReadLine());
            int min = int.Parse(Console.ReadLine());
            int max = int.Parse(Console.ReadLine());
            Random randomGenerator = new Random();
            for (int i = 0; i < n; i++)
            {
                Console.Write(randomGenerator.Next(min, max+1)+ " ");
            }
            
            
        }
    }
}
