#!/usr/bin/perl -w
use strict;

print "IP Address: ";
my $ip = <STDIN>;
chomp($ip);
print "Netmask: ";
my $netmask =<STDIN>;
chomp($netmask);
print "Network: ";
my $network =<STDIN>;
chomp($network);
print "Broadcast: ";
my $broadcast =<STDIN>;
chomp($broadcast);
print "Gateway: ";
my $gateway =<STDIN>;
chomp($gateway);
print "DNS Servers: ";
my $dns =<STDIN>;
chomp($dns);

open(FILE, "</etc/network/interfaces") || die "File not found";
my @lines = <FILE>;
close(FILE);

my @newlines;
foreach(@lines) {
    $_ =~ s/address .*$/address $ip/g;
    $_ =~ s/netmask .*$/netmask $netmask/g;
    $_ =~ s/network .*$/network $network/g;
    $_ =~ s/broadcast .*$/broadcast $broadcast/g;
    $_ =~ s/gateway .*$/gateway $gateway/g;
    $_ =~ s/dns-nameservers .*$/dns-nameservers $dns/g;
    push(@newlines,$_);
}

open(FILE, ">/etc/network/interfaces") || die "File not found";
print FILE @newlines;
close(FILE);

system('sudo ifdown eth0 && ifup eth0');

