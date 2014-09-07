using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _04_PrintDeckOf52Cards
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.OutputEncoding = Encoding.UTF8;
            char pika = '\u2660';
            char kupa = '\u2665';
            char spatiq = '\u2663';
            char karo = '\u2666';
            string suits = "\u2660\u2665\u2663\u2666";
            string[] cards = {"2","3","4","5","6","7","8","9","10","J","Q","K","A"};
            for (int i = 0; i < cards.Length; i++)
            {
                for (int j = 0; j < suits.Length; j++)
                {
                    Console.Write(cards[i]);
                    Console.Write(suits[j]);
                    Console.Write(" ");
                }
                Console.WriteLine();
            }
        }
    }
}
