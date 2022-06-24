// See https://aka.ms/new-console-template for more information

using System;

namespace Projeto1
{
    class Program
    {
        static void Main(string [] args)
        {
            int numeroDeVezes = 5;

            for (int i=0; i < numeroDeVezes; i++)
            {
                Console.WriteLine($"Bem vindo ao curso de .NET {i}");
            }
        }
    }
}
