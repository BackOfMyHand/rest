﻿//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated from a template.
//
//     Manual changes to this file may cause unexpected behavior in your application.
//     Manual changes to this file will be overwritten if the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------

namespace StridingSoft.Services.Models.Collectioner
{
    using System;
    using System.Data.Entity;
    using System.Data.Entity.Infrastructure;
    
    public partial class CollectionerEntities : DbContext
    {
        public CollectionerEntities()
            : base("name=CollectionerEntities")
        {
        }
    
        protected override void OnModelCreating(DbModelBuilder modelBuilder)
        {
            throw new UnintentionalCodeFirstException();
        }
    
        public virtual DbSet<Collection> Collections { get; set; }
        public virtual DbSet<Item> Items { get; set; }
        public virtual DbSet<Role> Roles { get; set; }
        public virtual DbSet<Section> Sections { get; set; }
        public virtual DbSet<User> Users { get; set; }
    }
}
