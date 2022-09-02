using Microsoft.EntityFrameworkCore;
using AbangiAPI.Models;

namespace AbangiAPI.Data
{
    public class UserContext : DbContext
    {
        public UserContext(DbContextOptions<UserContext> options) : base(options)
        {
        }
        public DbSet<User> Users{ get; set; }
    }
}